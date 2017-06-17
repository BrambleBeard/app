<table class="table is-striped" id="secretsTable">
    <thead>
        <tr>
            <th>Secret</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $secrets as $secret)
        <tr>
            <td>{{ $secret->content }}</td>
            <td>Action</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- /#secretsTable -->