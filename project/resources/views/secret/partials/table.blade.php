
<table class="table is-striped" id="secretsTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>Created</th>
            <th>Expires</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $secrets as $secret)
        <tr>
            <td>{{ $secret->title }}</td>
            <td>{{ $secret->url }}</td>
            <td>{{ $secret->created_at }}</td>
            <td>{{ $secret->expires_at }}</td>
            <td>[<a href="">V</a>] [<a href="">E</a>] [<a href="">D</a>]</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- /#secretsTable -->
