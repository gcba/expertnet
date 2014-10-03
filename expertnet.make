api = 2
core = 7.x

; Drupal Core
projects[drupal][type] = core
projects[drupal][version] = 7.31
; The Panopoly Foundation
projects[panopoly_core][version] = 1.x-dev
projects[panopoly_core][subdir] = panopoly
projects[panopoly_images][version] = 1.x-dev
projects[panopoly_images][subdir] = panopoly
projects[panopoly_theme][version] = 1.x-dev
projects[panopoly_theme][subdir] = panopoly
projects[panopoly_magic][version] = 1.x-dev
projects[panopoly_magic][subdir] = panopoly
projects[panopoly_widgets][version] = 1.x-dev
projects[panopoly_widgets][subdir] = panopoly
projects[panopoly_admin][version] = 1.x-dev
projects[panopoly_admin][subdir] = panopoly
projects[panopoly_users][version] = 1.x-dev
projects[panopoly_users][subdir] = panopoly
; The Panopoly Toolset
projects[panopoly_pages][version] = 1.x-dev
projects[panopoly_pages][subdir] = panopoly
projects[panopoly_wysiwyg][version] = 1.x-dev
projects[panopoly_wysiwyg][subdir] = panopoly
projects[panopoly_search][version] = 1.x-dev
projects[panopoly_search][subdir] = panopoly
; Panopoly Recommended
projects[devel][type] = module
projects[uuid][version] = 1.x-dev
projects[uuid][download][type] = git
projects[uuid][download][branch] = 7.x-1.x
projects[uuid][patch][1605284] = http://drupal.org/files/1605284-define-types-for-tokens-6.patch
; Expertnet
projects[og][version] = 7.x-2.x
projects[expertnet][type] = "profile"
projects[expertnet][download][type] = "git"
projects[expertnet][download][url] = "https://github.com/gcba/expertnet.git"
projects[expertnet][download][branch] = "master"
