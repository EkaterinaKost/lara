<html>
    <body>
        <form name="employee" method="post" action="{{Route('store_employee')}}">
            @csrf
            <label >First name</label><input type="text" name="first_name" value="@if ($employee){{$employee->first_name}}
            
            @endif"><br>
            <label >Last name</label><input type="text" name="last_name"  value="@if ($employee){{$employee->last_name}}
            
            @endif"><br>
            <label >department</label><!--<select type="text" name="departament"><br>
                <option value="finance">finance</option>
                <option value="it">IT</option>
                <option value="internet service">internet service</option>
                </select>-->
            <input type="checkbox" name="departament[]" value="finance" @if ($employee && in_array('finance',unserialize($employee->departament))) checked
            
            @endif>finance</input>
            <input type="checkbox" name="departament[]" value="it"  @if ($employee && in_array('it',unserialize($employee->departament))) checked
            
            @endif >IT</input>
            <input type="checkbox" name="departament[]" value="internet service"  @if ($employee && in_array('internet service',unserialize($employee->departament))) checked
            
            @endif>internet service</input>
            <input type="submit" value="send">
        </form>
    </body>
</html>