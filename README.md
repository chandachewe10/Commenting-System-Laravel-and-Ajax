# Commenting-System-Laravel-and-Ajax
This is the commenting system which can be implemented on a blog or website to allow visitors to leave comments and make replies. It is made using PHP Laravel and Ajax jQuery.
# Installation
Am asssuming you have composer Installed in your Machine. Navigate to the root of your Laravel Project and open your CLI.
run `composer require chandachewe/comments`
You can further customise the views comments by pulishing them on your CLI. `php artisa vendor:publish` and select `Chandachewe\Comments\commentingSystemProvider`
run migrations `php artisan migrate`
Start making comments. Here is the route `/make_comment`