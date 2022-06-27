<!DOCTYPE html> 
    <head>
    <title>Tasker</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
            
    </head>
    <body>
        <div class="parent">
            <h1>Tasker</h1>

            <div>
                <h3>Login</h3>
                <form>
                    <div class="mb-2 labelLog">
                        <label for="InputEmail1" class="form-label">email</label>
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2 labelLog">
                        <label for="InputPassword1" class="form-label">password</label>
                        <input type="password" class="form-control" id="InputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>           
            </div>
        
            <div>
                <h4>Add new task:</h4>
                <form>
                    <div class="mb-2 labelLog">
                        <label for="newName" class="form-label">name</label>
                        <input type="text" class="form-control" id="newName">
                    </div>
                    <div class="mb-2 labelLog">
                        <label for="newEmail" class="form-label">email</label>
                        <input type="email" class="form-control" id="newEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2 labelLog">
                        <label for="newText" class="form-label">text</label>
                        <input type="text" class="form-control" id="newText">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>        
            </div>

            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                            <th>status</th>
                            <th>text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>