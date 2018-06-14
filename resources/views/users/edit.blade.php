
<a href="/users" class="btn btn-default"> Return Back</a>
<form method="POST" action="/users/edit/{{$users->id}}">
    {{ csrf_field() }}
<input type="hidden" name="txtid" id="txtid" value="{{$users->id}}" />
        E-mail <input type="email" name="txtemail" id="txtemail" value="{{$users->email}}" /><br />
        <input type="submit" name="btnsub" id="btnsub" Value="submit" />
</form>
