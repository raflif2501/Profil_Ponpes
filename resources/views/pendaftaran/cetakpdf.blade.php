<!DOCTYPE html>
<html>

<head>
    <title>Bukti Pendaftaran Santri</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        p {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 16px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 22px;
        }

        table tr td,
        table tr th {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 16px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 22px;
        }

        h6 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
        }

        .content {
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            max-height: 35rem;
        }
    </style>
    <img src="{{ public_path('loginn/images/kop.png') }}" alt="KOP PP MA" style="width:100%; height: auto">
    {{-- storage_path('app/public/dummy.jpg') --}}
    <center>
        <h6><b><u>BIODATA SANTRI</u></b></h6>
    </center>
    <div class="content">
        <table id="example1" class="">
            <tbody>
                @foreach ($data as $p)
                    <tr>
                        <td>A. Keterangan Diri Santri : </td>
                    </tr>
                    <tr>
                        <td width=250px;>1. Nama Lengkap </td>
                        <td>: {{ $p->nama }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>2. Tempat, Tgl Lahir </td>
                        <td>: {{ $p->tempat }}, {{ $p->tgl }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>3. Alamat </td>
                        <td>: {{ $p->alamat }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>4. Anak ke </td>
                        <td>: {{ $p->anak }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>5. Jumlah Saudara </td>
                        <td>: {{ $p->saudara }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td>B. Keterangan Pendidikan : </td>
                    </tr>
                    <tr>
                        <td width=250px;>1. Ijazah Terakhir </td>
                        <td>: {{ $p->ijazah }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>2. No. NISN </td>
                        <td>: {{ $p->nisn }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>3. Diterima Tanggal </td>
                        <td>: {{ $p->diterima }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>4. Daftar Kelas </td>
                        <td>: {{ $p->kelas }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td>C. Keterangan Orang Tua : </td>
                    </tr>
                    <tr>
                        <td width=250px;>Nama Ayah </td>
                        <td>: {{ $p->orang->ayah }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Tempat, Tgl Lahir </td>
                        <td>: {{ $p->orang->tempat1 }}, {{ $p->orang->tgl1 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Alamat/No. Telp </td>
                        <td>: {{ $p->orang->alamat1 }} / {{ $p->orang->telp1 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pendidikan </td>
                        <td>: {{ $p->orang->pendidikan1 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pekerjaan </td>
                        <td>: {{ $p->orang->pekerjaan1 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Nama Ibu </td>
                        <td>: {{ $p->orang->ibu }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Tempat, Tgl Lahir </td>
                        <td>: {{ $p->orang->tempat2 }}, {{ $p->orang->tgl2 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Alamat/No. Telp </td>
                        <td>: {{ $p->orang->alamat2 }} / {{ $p->orang->telp2 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pendidikan </td>
                        <td>: {{ $p->orang->pendidikan2 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pekerjaan </td>
                        <td>: {{ $p->orang->pekerjaan2 }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td>D. Keterangan Wali : </td>
                    </tr>
                    <tr>
                        <td width=250px;>Nama Wali </td>
                        <td>: {{ $p->wali->wali }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Tempat, Tgl Lahir </td>
                        <td>: {{ $p->wali->tempat3 }}, {{ $p->wali->tgl3 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Alamat/No. Telp </td>
                        <td>: {{ $p->wali->alamat3 }} / {{ $p->wali->telp3 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pendidikan </td>
                        <td>: {{ $p->wali->pendidikan3 }}</td>
                    </tr>
                    <tr>
                        <td width=250px;>Pekerjaan </td>
                        <td>: {{ $p->wali->pekerjaan3 }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td>E. Keterangan Tambahan : </td>
                    </tr>
                    <tr>
                        <td>1. {{ $p->wali->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
