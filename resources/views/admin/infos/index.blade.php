@extends('layouts.app') @section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

@if ($count == 0)
<div class="ml-5">
    <a class="btn btn-primary" href="{{ url('admin/infos/create') }}">create info</a>
</div>
@else
<div class="ml-5">
    <a class="btn btn-primary" style="display: none" href="{{ url('admin/infos/create') }}">create info</a>
</div>
@endif

<br>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br /> @endif @foreach($infos as $info)
    <div class="container">
        <tr>
            <td>phone</td> :
            <td>{{$info->phone}} </td> <br>
            <td>mobile</td>:
            <td>{{$info->mobile}} </td><br>
            <td>fax</td> :
            <td>{{$info->fax}} </td><br>
            <td>email</td>:
            <td>{{$info->email}} </td><br>
            <td>location</td>:
            <td>{{$info->location}} </td><br>
            <td>address</td>:
            <td>{{$info->address_1}} </td><br>
            <td>address</td>:
            <td>{{$info->address_2}} </td><br>
            <td>address</td>:
            <td>{{$info->address_3}} </td><br>
            <td><a href="{{ route('infos.edit',$info->id)}}" class="btn btn-primary">Edit</a></td>
        </tr>
    </div>
    @endforeach
    </tbody>
    </table>
</div>
@endsection
