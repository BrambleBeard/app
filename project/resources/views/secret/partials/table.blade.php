
<table class="table is-striped" id="secretsTable">
    <thead>
        <tr>
            <th>Secret</th>
            <th>Created</th>
            <th>URL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $secrets as $secret)
        <tr>
            <td>{{ $secret->content }}</td>
            <td>{{ $secret->created_at }}</td>
            <td>{{ $secret->url }}</td>
            <td>Action</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- /#secretsTable -->
