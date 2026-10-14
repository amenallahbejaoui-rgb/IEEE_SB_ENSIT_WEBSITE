# Script to update SIGHT event footer logos to use SIGHT white logo

$eventSightPath = "c:\Users\amenn\IEEE\unit\sight\event-sight"

# Get all HTML files in event-sight directory and subdirectories
$htmlFiles = Get-ChildItem -Path $eventSightPath -Filter "*.html" -Recurse

$updatedCount = 0
$skippedCount = 0

foreach ($file in $htmlFiles) {
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    $modified = $false
    
    # Determine the correct relative path based on file location
    $relativePath = $file.DirectoryName.Substring($eventSightPath.Length).TrimStart('\')
    
    if ($relativePath -eq "") {
        # File is directly in event-sight folder (3 levels up from root)
        $pattern1 = [regex]::Escape('src="../../../black.png" width="200" alt="logo sb ieee"')
        $replacement1 = 'src="../logo_sight_white.png" width="200" alt="logo sb ieee"'
    } else {
        # File is in a subfolder (needs to go 2 levels up to sight folder)
        $pattern1 = [regex]::Escape('src="../../../../black.png" width="200" alt="logo sb ieee"')
        $replacement1 = 'src="../../logo_sight_white.png" width="200" alt="logo sb ieee"'
    }
    
    # Replace footer logo with SIGHT logo
    if ($content -match $pattern1) {
        $content = $content -replace $pattern1, $replacement1
        $modified = $true
    }
    
    if ($modified) {
        Set-Content -Path $file.FullName -Value $content -Encoding UTF8 -NoNewline
        Write-Host "Updated footer: $($file.Name) in $relativePath" -ForegroundColor Green
        $updatedCount++
    } else {
        $skippedCount++
    }
}

Write-Host ""
Write-Host "Summary:" -ForegroundColor Cyan
Write-Host "  Updated footer logos: $updatedCount files" -ForegroundColor Green
Write-Host "  Skipped: $skippedCount files" -ForegroundColor Yellow
