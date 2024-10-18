<html>
    <body>
        <form action="{{Route('post_form')}}" method="post" name="myname">
            <label>Name:</label><input type="text" name="my_name"><br>
            <label>Password:</label><input type="password" name="password"><br> 
            <input type="hidden" name="age" value="35"><br><!-- hidden - скрытое поле -->

            <label>male</label><input type="radio" name="gender" value="male"> 
            <label>female</label><input type="radio" name="gender" value="female">
            <input type="submit" value="send"><br>
            
            <br>
        </form>
    </body>
</html>