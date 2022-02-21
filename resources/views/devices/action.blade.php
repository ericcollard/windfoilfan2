<td class="table-action">
    <a href="{{ route('device.show',['category'=>$category['slug'] , 'device'=>$id]) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
    <a href="" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
    <form id="delete-{{ $id }}" method="POST" action="" class="d-sm-inline-block action-icon">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="javascript:{}" onclick="document.getElementById('delete-{{ $id }}').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete"></i></a>
    </form>
</td>
