<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="../css/data-kendaraan.css" />
        <link rel="stylesheet" href="../css/responsive.css" />

        <title>Dashboard</title>
    </head>
    <body>
        <?php include "navbar.php" ?>

        <div class="konten">
            <?php include "header.php" ?>

            <div class="workspace">
                <h2>Data Kendaraan</h2>
                <div class="row">
                    <div class="wrapper col col-sm-5">
                        <div class="judul">
                            <p>Tambah Data</p>
                        </div>
                        <div class="row">
                            <form action="" method="post">
                                <h3>Nama Merk</h3>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    placeholder="Ketik"
                                    style="margin-bottom: 15px"
                                />
                                <h3>Nama Mobil</h3>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    placeholder="Ketik"
                                    style="margin-bottom: 15px"
                                />
                                <div class="mini-wrapper">
                                    <div class="col-6 left">
                                        <h3>Warna Mobil</h3>
                                        <input
                                            type="text"
                                            name="username"
                                            id="username"
                                            placeholder="Ketik"
                                            style="margin-bottom: 15px"
                                        />
                                    </div>
                                    <div class="col-6 right">
                                        <h3>No Polisi</h3>
                                        <input
                                            type="text"
                                            name="username"
                                            id="username"
                                            placeholder="Ketik"
                                            style="margin-bottom: 15px"
                                        />
                                    </div>
                                    <div class="mini-wrapper">
                                        <div class="col-6 left">
                                            <h3>Jumlah Kursi</h3>
                                            <input
                                                type="text"
                                                name="username"
                                                id="username"
                                                placeholder="Ketik"
                                                style="margin-bottom: 15px"
                                            />
                                        </div>
                                        <div class="col-6 right">
                                            <h3>Tahun Beli</h3>
                                            <input
                                                type="text"
                                                name="username"
                                                id="username"
                                                placeholder="Ketik"
                                                style="margin-bottom: 15px"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="in-image left">
                                    <h3 style="left: 30px">Gambar Mobil</h3>
                                    <span class="btn btn-file">
                                        browse
                                        <input type="file" />
                                    </span>
                                    <h4
                                        class="right"
                                        style="
                                            color: #284b69;
                                            margin: 20px 0 0 0;
                                        "
                                    ></h4>
                                    no file selected
                                </div>
                            </form>
                            <div class="execute right col-12">
                                <span
                                    class="btn btn-submit submit"
                                    style="border: 1px solid #53cd6e"
                                >
                                    Submit
                                    <input type="submit" />
                                </span>
                                <span
                                    class="btn btn-submit cancel"
                                    style="border: 1px solid #dd4c3c"
                                >
                                    Cancel
                                    <input type="submit" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper col col-sm-6">
                        <div class="judul">
                            <p>Daftar Mobil</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form action="/action_page.php">
                                    <input
                                        type="text"
                                        placeholder="Search.."
                                        name="search"
                                    />
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <table cellspacing="0">
                                    <tr>
                                        <th
                                            style="
                                                border-right: 1px solid #ededed;
                                            "
                                        >
                                            No
                                        </th>
                                        <th
                                            style="
                                                border-right: 1px solid #ededed;
                                            "
                                        >
                                            Mobil
                                        </th>
                                        <th
                                            style="
                                                border-right: 1px solid #ededed;
                                            "
                                        >
                                            Merk Mobil
                                        </th>
                                        <th
                                            style="
                                                border-right: 1px solid #ededed;
                                            "
                                        >
                                            Status
                                        </th>
                                        <th
                                            style="
                                                border-right: 1px solid #ededed;
                                            "
                                        >
                                            Status
                                        </th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <h4>showing .. to .. of .. entries</h4>
                                <!--
                                <div class="next-wrapper col-6">
                                    <div class="row">
                                        <div class="next">
                                            <h1 class="right">next</h1>
                                            <h1 class="left">prev</h1>
                                        </div>
                                    </div>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
