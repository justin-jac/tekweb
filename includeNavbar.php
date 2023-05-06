<nav class="navbar navbar-expand-lg navbar-light " style="background-color:Snow">
    <em><div class="navbar-brand" id="time"></div></em>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="bar">
            <?php

                $temp="";
                if(isset($_SESSION["id_user"]))
                {
                    $temp.='<li class="nav-item active" ><div class="nav-link active">
                    <h5> Hello '.$_SESSION["nama"].'</h5> <span class="sr-only">(current)</span></div>
                </li><li class="nav-item " ><a class="nav-link " href="login.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item " ><a class="nav-link " href="history.php">
                    Transaksi <span class="sr-only">(current)</span></a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php" >Logout <span class="sr-only">(current)</span></a>
                </li>';

                } 
                else
                {
                    $temp.='<li class="nav-item">
                    <a class="nav-link" href="#" id="login" >Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="sign">Sign in <span class="sr-only">(current)</span></a>
                </li>';
                }
                echo $temp;
            ?>


        </ul>

    </div>
    </div>
</nav>