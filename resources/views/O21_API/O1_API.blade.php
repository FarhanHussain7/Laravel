<!-- API - (Application programming interface)
  - An application programming interface is way for share data between 2 technology or 2 projects.
  example :- 1 - make Api in laravel
             2 - Consume api in react, angular, and vue.

    Need : - UI technologies can not connect with DB
           - So UI technologies can get data with API.


    An API (Application Programming Interface) is a set of rules that lets two software programs talk to each other and exchange data or services.
     It acts like a bridge between different systems, making it easier to build apps that work together.

🧠 Think of It Like a Restaurant
Imagine you're at a restaurant:
- You look at the menu (API documentation).
- You tell the waiter (API) what you want.
- The waiter goes to the kitchen (server), gets your food (data), and brings it back.
You don’t need to know how the kitchen works—you just use the menu and the waiter. That’s how APIs work between apps.

💻 Real-Life Example
Let’s say you’re using a weather app:
- The app sends a request to a weather API: “What’s the weather in Dadri?”
- The API talks to the weather server and gets the data.
- The app shows you the temperature, humidity, etc.
You didn’t talk to the server directly—the API handled it.

🔧 Why APIs Are Useful
- Connect apps: APIs let different apps and services work together.
- Save time: Developers don’t need to build everything from scratch.
- Secure access: APIs only expose what’s needed, keeping systems safe.
- Enable automation: APIs let systems exchange data without human input.

📦 Types of APIs
     - Open APIs are public and anyone can use them. Example: weather or map APIs.
- Internal APIs are used inside a company to connect its own systems.
- Partner APIs are shared with trusted partners and usually need permission.
- Composite APIs combine multiple APIs into one request to save time.
Now based on how they work:
- REST APIs are the most common. They use simple web links and are easy to use.
- SOAP APIs are more strict and secure. Often used in banking or big companies.
- GraphQL APIs let you ask for exactly what you need—nothing more, nothing less.
- gRPC APIs are super fast and great for connecting microservices.
Other types:
- Web APIs work over the internet between apps.
- Library APIs are built into programming libraries like jQuery or NumPy.
- Hardware APIs help software talk to devices like cameras or printers.
- Operating System APIs let apps use system features like files or memory.
Let me know if you want to see how to use one of these in code—I can show you with a real example.

📦 Other Specialized APIs
- Web APIs: Used over the internet (e.g., REST, GraphQL)
- Library APIs: Functions exposed by a software library (e.g., jQuery, NumPy)
- Hardware APIs: Interfaces to control devices (e.g., camera, printer)
- Operating System APIs: Provided by OS to interact with system features (e.g., Windows API)

Step-by-Step: Create an API in Laravel

Note : run this : php artisan install:api

1. Create a Laravel Project (if you haven’t already)
laravel new my-api-project
cd my-api-project


2. Set Up Your Database
- Open .env file
- Update DB settings (MySQL, SQLite, etc.)
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password


Then run:
php artisan migrate



3. Create a Model and Migration
Example: Create a Post model
php artisan make:model Post -m


Edit the migration file in database/migrations/...create_posts_table.php:
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('body');
        $table->timestamps();
    });
}


Run migration:
php artisan migrate



4. Create a Controller
php artisan make:controller Api/PostController


Inside PostController.php:
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return Post::all();
    }

    public function store(Request $request) {
        return Post::create($request->all());
    }

    public function show($id) {
        return Post::find($id);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }

    public function destroy($id) {
        return Post::destroy($id);
    }
}

5. Define API Routes
Open routes/api.php and add:
use App\Http\Controllers\Api\PostController;

Route::apiResource('posts', PostController::class);


This creates routes like:
- GET /api/posts → list all posts
- POST /api/posts → create a post
- GET /api/posts/{id} → show one post
- PUT /api/posts/{id} → update a post
- DELETE /api/posts/{id} → delete a post

6. Test Your API
Use Postman or browser:
- http://localhost:8000/api/posts
Start server:
php artisan serve



7. (Optional) Add Validation
In store() and update() methods:
$request->validate([
    'title' => 'required|string',
    'body' => 'required|string',
]);



8. (Optional) Use API Resources for Clean Output
php artisan make:resource PostResource


Then return:
return PostResource::collection(Post::all());

-->
