<div>

    <h1>CheckBox and Radio Button handling in Laravel</h1>
<form action="/radio" method="post">
    @csrf
    <div>
        <h2>User Skills</h2>
        <input type="checkbox" name="skill[]" value="PHP">
    <label for="PHP">PHP</label>
    <br/><br/>
    <input type="checkbox" name="skill[]" value="Java">
    <label for="Java">Java</label>
    <br/><br/>
    <input type="checkbox" name="skill[]" value="Python">
    <label for="Python">Python</label>
    <br/><br/>
    <input type="checkbox" name="skill[]" value="C++">
    <label for="C++">C++</label>
    </div>

    <div>
        <h2>User Gender</h2>
        <input type="checkbox" name="gender" value="Male">
    <label>Male</label>
    <br/><br/>
    <input type="checkbox" name="gender" value="Female">
    <label>Female</label>
    </div>

    <div>
        <h2>City</h2>
        <select name="city" id="">
            <option value="">Select city</option>
            <option value="Delhi">Delhi</option>
            <option value="Agra">Agra</option>
            <option value="Rajesthan">Rajesthan</option>
            <option value="Punjab">Punjab</option>
        </select>
    </div>

    <div>
        <h2>User Age</h2>
        <input type="range" name="age" min="18" max="100">
    </div>

    <button>Submit</button>
</form>

</div>
