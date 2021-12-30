<div class="container"> 
          <table class="table table-dark table-striped">

            <thead>
            
              <tr>
                 
                  <th scope="col">#ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Role</th>
                  <th scope="col">Type</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
              </tr>
              
            </thead>

            <tbody>
            @foreach($teams as $team)
              <tr>
                
                <td>{{ $team['id'] }}</td>
                <td>{{ $team['fname'] }}</td>
                <td>{{ $team['lname'] }}</td>
                <td>{{ $team['email'] }}</td>
                <td>{{ $team['phone'] }}</td>
                <td>{{ $team['address'] }}</td>
                <td>{{ $team['role'] }}</td>
                <td>{{ $team['type'] }}</td>
                <td>{{ $team['status'] }}</td>
                <td>
                  <a href="" class="btn btn-success"> EDIT </a>
                  <a href="" class="btn btn-danger"> DELETE </a>
                </td>
               
              </tr>
              @endforeach
            </tbody>
  
          </table>
        
        </div>