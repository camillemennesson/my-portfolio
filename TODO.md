# TODO for Standardizing Image Src Paths

## Information Gathered
- All images are located in the "images/" directory (lowercase) with subdirectories like "hero/", "icons/", etc., as per project structure.
- Current inconsistencies: Paths use "/Images/" (absolute, capital 'I') or "Images/" (relative, capital 'I'), leading to potential 404 errors due to casing and absolute positioning.
- Standardization: Change all to relative "images/subdir/filename.ext" (lowercase 'i', no leading slash) to match directory structure and ensure consistency across deployment.

## Plan
- Edit all PHP files containing <img src> tags to update paths.
- Preserve alt texts, classes, and other attributes.
- External script srcs (e.g., Google tags) remain unchanged.

## Dependent Files to be Edited
- [x] index.php (project thumbnails in hero section)
- [x] about.php (CV and LinkedIn images)
- [x] Catan.php (case study images)
- [x] Mavoie.php (case study images)
- [x] Osmia.php (case study images)
- [x] Parents.php (case study images)
- [x] Riseup.php (case study images)
- [x] Soliguide.php (case study images)
- [x] Spotify.php (case study images)

## Followup Steps
- [ ] Test changes: Run `php -S localhost:8000`, launch browser, check console for no 404 errors on images, verify all load correctly.
- [ ] Update TODO.md after each file edit.
- [ ] If issues, check file casing in "images/" dir.
