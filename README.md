# custom-pagination
This is custom pagination design for laravel pagination function

# Step 1
First you need to add this pagination.blade.php file to your project

# Step 2
Now you just need to call this file location in paginate parameter <br>
Example: {{ $data['blogs']->links('user.templates.BasicPortfolio.layouts.pagination') }}
