@extends('layouts.home')
    @section('content')
            <div class="section-main section-minimal">
                <center>
                    <div class="container">
                        <center><table>
                                <tr><td>Email Address: </td><td><input name="email" type='text' id='minimal-signup-email'/></td></tr>
                                <tr><td>Password: </td><td><input name="password" type='password' id='minimal-signup-password'/></td></tr>
                                <tr><td>Confirm password: </td><td><input name="password" type='password' id='minimal-signup-confirmpassword'/></td></tr>
                            </table></center>
                        <button id="btn-minimal-signup">Register</button><br/>
                        <span style="color:red" id="minimal-signup-errorMsg"></span>
                        <span style="color:green" id="minimal-signup-successMsg"></span>
                    </div>
                </center>                
            </div> 
    @endsection