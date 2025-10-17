<div>
    <h1>Update data : </h1>
    <!-- {{print_r($data)}} -->
    <form action="/updatedata/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter your name">
        <br/>
        <br/>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter your email">
        <br/>
        <br/>
        <input type="text" name="batch" value="{{$data->batch}}" placeholder="Enter your batch">
        <br/>
        <br/>
        <button>Update</button>
        <a href="/readdata">List</a>
    </form>
</div>
<style>
    /* Reset some default styles */
body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(to right, #f0f4f8, #d9e2ec);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Container styling */
div {
  background-color: #ffffff;
  padding: 40px 50px;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 500px;
  animation: fadeIn 0.8s ease-in-out;
}

/* Heading */
h1 {
  text-align: center;
  color: #2c3e50;
  margin-bottom: 30px;
  font-size: 24px;
}

/* Input fields */
input[type="text"] {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: border-color 0.3s ease;
  font-size: 16px;
}

input[type="text"]:focus {
  border-color: #3498db;
  outline: none;
}

/* Button styling */
button {
  width: 100%;
  padding: 12px;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #2980b9;
}

/* Link styling */
a {
  display: block;
  text-align: center;
  margin-top: 15px;
  color: #3498db;
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  text-decoration: underline;
}

/* Animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
