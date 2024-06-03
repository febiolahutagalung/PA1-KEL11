@extends('layout.user')

@section('container')
 <!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Data Jemaat</h3>
        <ol class="breadcrumb justify-content-center mb-0">
        </ol>    
    </div>
</div>
<!-- Header End -->

<div class="container">
    <div class="input-group mb-3 mt-4 position-relative">
        <input type="text" class="form-control" id="searchInput" placeholder="Cari Jemaat">
        <div class="dropdown-menu w-100" id="dropdownMenu" style="display: none; max-height: 200px; overflow-y: auto; position: absolute; top: 100%; left: 0; z-index: 1000;">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead class="bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Tanggal Lahir Ayah</th>
                    <th scope="col">Status Baptis Ayah</th>
                    <th scope="col">Alamat Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Tanggal Lahir Ibu</th>
                    <th scope="col">Status Baptis Ibu</th>
                    <th scope="col">Alamat Ibu</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $nomor }}</td>
                    <td>{{ $row->nama_keluarga }}</td>
                    <td>{{ $row->nama_ayah }}</td>
                    <td>{{ $row->tgl_lahir_ayah }} (Ayah)</td>
                    <td>{{ $row->status_babtis_ayah }}</td>
                    <td>{{ $row->alamat_ayah }}</td>
                    <td>{{ $row->nama_ibu }}</td>
                    <td>{{ $row->tgl_lahir_ibu }} (Ibu)</td>
                    <td>{{ $row->status_babtis_ibu }}</td>
                    <td>{{ $row->alamat_ibu }}</td>
                </tr>
                <?php $nomor++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
// Add event listener to search input
document.getElementById('searchInput').addEventListener('input', function() {
    let filter = this.value.toLowerCase();
    let dropdownMenu = document.getElementById('dropdownMenu');
    let rows = document.querySelectorAll('#myTable tbody tr');
    let matches = [];

    // Find matches
    rows.forEach(row => {
        let nama = row.cells[1].textContent.toLowerCase();
        if (nama.startsWith(filter) && filter !== '') {
            matches.push(row.cells[1].textContent);
        }
    });

    // Clear previous dropdown menu items
    dropdownMenu.innerHTML = '';

    // Populate dropdown menu with matches
    if (matches.length > 0) {
        matches.forEach(match => {
            let div = document.createElement('div');
            div.className = 'dropdown-item';
            div.textContent = match;
            div.addEventListener('click', function() {
                document.getElementById('searchInput').value = match;
                filterTable(match);
                dropdownMenu.style.display = 'none';
            });
            dropdownMenu.appendChild(div);
        });
        dropdownMenu.style.display = 'block';
    } else {
        dropdownMenu.style.display = 'none';
    }
});

// Function to filter table based on search input
function filterTable(query) {
    let filter = query.toLowerCase();
    let rows = document.querySelectorAll('#myTable tbody tr');

    // Show or hide rows based on filter
    rows.forEach(row => {
        let nama = row.cells[1].textContent.toLowerCase();
        let isVisible = nama.startsWith(filter);
        row.style.display = isVisible ? '' : 'none';
    });
}

// Hide dropdown when clicking outside
document.addEventListener('click', function(event) {
    let dropdownMenu = document.getElementById('dropdownMenu');
    let searchInput = document.getElementById('searchInput');
    if (!dropdownMenu.contains(event.target) && !searchInput.contains(event.target)) {
        dropdownMenu.style.display = 'none';
    }
});
</script>
@endsection
