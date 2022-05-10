# Commenting-System-Laravel-and-Ajax
This is the commenting system which can be implemented on a blog or website to allow visitors to leave comments and make replies. It is made using PHP Laravel and Ajax jQuery.
# Installation
1. Am asssuming you have composer Installed in your Machine. Navigate to the root of your Laravel Project and open your CLI.
2. run `composer require chandachewe/comments`
3. run migrations `php artisan migrate`
4. You can further customise the views comments by pulishing them. To publish the views run
5. `php artisan vendor:publish --tag=chandachewe-comments` 
6. Start making comments. Here is the route `/make_comment`