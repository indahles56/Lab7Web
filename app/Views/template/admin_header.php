<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>

<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4784f4;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .btn:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }

        .btn:focus,
        .btn:active,
        .btn:hover {
            outline: none;
        }

        form {
            width: 100%;
            margin: 0 auto;
        }

        p {
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            resize: vertical;
        }

        input[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #286090;
        }
    </style>


    <div id="container">
        <header>
            <h1>Admin Portal Berita</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Dashboard</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
        </nav>
        <section id="wrapper">
            <section id="main">