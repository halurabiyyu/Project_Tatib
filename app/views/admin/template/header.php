<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="<?=BASEURL?>/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        /* CSS untuk styling */
        .profile {
            position: relative;
            display: inline-block;
            margin-right: 100px;
        }
        .profile-title {
            background: rgba(0, 0, 0, 0);
            color: #FFFFFF;
            cursor: pointer;
            text-decoration: none;
        }
        .profile-title:hover{
            text-decoration: none;
            color: white;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #e1e1e1;
        }
    </style>
</head>
<header class="container-header-admin">
    <div class="row-admin">
    <div class="header-container-admin">
        <div class="header-content-admin">
            <a class="header-title">
                <img src="<?= BASEURL?>/img/logo_polinema.png" alt="logo polinema" width="35px">
                POLITEKNIK NEGERI MALANG
            </a>
        </div>
        <div class="profile">
            <button class="btn profile-title" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=$data['title']?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=BASEURL?>/Authorization/logout">Log Out</a></li>
            </ul>
        </div>
    </div>
    </div>
</header>
