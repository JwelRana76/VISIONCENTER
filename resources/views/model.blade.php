<!-- Modal -->
<div class="modal fade" id="userLogIn" tabindex="-1" aria-labelledby="userLogIn" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" autocomplete="off">
                @csrf
                    <table class="modelTable">
                        <tr>
                            <td class="td1">Select Base Center:</td>
                            <td>
                                <select name="basecenter" class="form-select">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Vision Center:</td>
                            <td>
                                <select name="cvc_name" class="form-select">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Select User Name:</td>
                            <td>
                                <select name="name" class="form-select">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Password:</td>
                            <td><input type="password" name="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-primary float-end">Login</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="doctorLogIn" tabindex="-1" aria-labelledby="doctorLogIn" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" autocomplete="off">
                @csrf
                    <table class="modelTable">
                        <tr>
                            <td class="td1">Select Hospital:</td>
                            <td>
                                <select name="basecenter" class="form-select">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Doctor Name:</td>
                            <td>
                                <select name="name" class="form-select">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Password:</td>
                            <td><input type="password" name="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-primary float-end">Login</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="adminLogIn" tabindex="-1" aria-labelledby="adminLogIn" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="error_messege"></ul>
                    <table class="modelTable">
                        <tr>
                            <td class="td1">User Name</td>
                            <td><input type="text" class="name form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Password:</td>
                            <td><input type="password" class="password form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button" class="btn btn-primary float-end adminLogin">Login</button>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>