@extends('Anton.Admin.layouts.Landingpage')
@section('Edit-tim')

<td width="753" height="250" align="left" bgcolor="#FFFFFF">
    <div align="center">EDIT TIM
    </div>
    <table width="755" border="0">
        <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <p align="left">
                <form action="/dashboard/tim/{{ $Data->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <table width="383" border="0">
                        <tr>
                            <td><small><strong>Judul TIM</strong></small></td>
                            <td>:</td>
                            <td><input type="text" name="judul_profil"></td>
                        </tr>
                        <tr>
                            <td><small><strong>Isi TIM </strong></small></td>
                            <td>:</td>
                            <td><textarea name="isi_profil" cols="70" rows="30"></textarea></td>
                        </tr>
                        <tr>
                            <td><small><strong>Gambar</strong></small></td>
                            <td>:</td>
                            <td><input type="file" name="fupload" id="nama_file"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="Submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
                </p>
                <p></p>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</td>
</tr>


@endsection