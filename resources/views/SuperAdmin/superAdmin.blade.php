@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex-grow px-12 py-8">
            <div class="flex justify-between mb-4">
                <input type="text" id="searchInput" class="p-2 border rounded" placeholder="Cari..." onkeyup="searchTable()">
                <select id="rowsPerPage" class="p-2 border rounded" onchange="changeRowsPerPage()">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <!-- Tambahkan lebih banyak opsi jika diperlukan -->
                </select>
            </div>
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table id="dataTable" class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 cursor-pointer" onclick="sortTable(0)">Nama</th>
                            <th scope="col" class="px-6 py-3 cursor-pointer" onclick="sortTable(1)">Email</th>
                            <th scope="col" class="px-6 py-3">Role</th>
                            <th scope="col" class="px-6 py-3">Edit Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Isi tabel akan diisi oleh JavaScript -->
                    </tbody>
                </table>
            </div>
            <div id="pagination" class="mt-4 flex justify-center">
            </div>
        </main>
    </div>
    <script>
        let data = [
            { nama: "Lia", email: "lia@example.com", role: "Konseli" },
            { nama: "Renata", email: "renata@example.com", role: "Konselor" },
            { nama: "Faris", email: "faris@example.com", role: "Tim konseling" },
            { nama: "Farid", email: "farid@example.com", role: "super admin" },
            { nama: "Ridho", email: "ridho@example.com", role: "Pimpinan" },
            { nama: "Agress", email: "agress@example.com", role: "Pimpinan" },
        ];

        let currentPage = 1;
        let rows = parseInt(document.getElementById('rowsPerPage').value, 10); 

        function displayList(items, wrapper, rowsPerPage, page) {
            wrapper.innerHTML = "";
            page--;

            let start = rowsPerPage * page;
            let end = start + rowsPerPage;
            let paginatedItems = items.slice(start, end);

            for (let i = 0; i < paginatedItems.length; i++) {
                let item = paginatedItems[i];

                let item_element = document.createElement('tr');
                item_element.classList.add('bg-white', 'border-b');
                item_element.innerHTML = `
                    <td class="px-6 py-4">${item.nama}</td>
                    <td class="px-6 py-4">${item.email}</td>
                    <td class="px-6 py-4" id="role-${start + i}">${item.role}</td>
                    <td class="px-6 py-4 text-right">
                        <button class="px-4 py-1 text-sm text-white bg-blue-500 rounded" onclick="editRole(${start + i}, '${item.role}')">Edit</button>
                    </td>`;

                wrapper.appendChild(item_element);
            }
        }

        function setupPagination(items, wrapper, rowsPerPage) {
            wrapper.innerHTML = "";

            let pageCount = Math.ceil(items.length / rowsPerPage);
            for (let i = 1; i < pageCount + 1; i++) {
                let btn = paginationButton(i, items);
                wrapper.appendChild(btn);
            }
        }

        function paginationButton(page, items) {
            let button = document.createElement('button');
            button.innerText = page;
            button.classList.add('p-1', 'border', 'rounded', 'mr-1', 'bg-white', 'hover:bg-gray-200');

            if (currentPage == page) button.classList.add('bg-gray-200');

            button.addEventListener('click', function () {
                currentPage = page;
                displayList(items, document.querySelector('#dataTable tbody'), rows, currentPage);

                let currentBtn = document.querySelector('#pagination button.bg-gray-200');
                currentBtn?.classList.remove('bg-gray-200');

                button.classList.add('bg-gray-200');
            });

            return button;
        }

        function changeRowsPerPage() {
            rows = parseInt(document.getElementById('rowsPerPage').value, 10);
            currentPage = 1; // Reset ke halaman pertama
            displayList(data, document.querySelector('#dataTable tbody'), rows, currentPage);
            setupPagination(data, document.getElementById('pagination'), rows);
        }

        function sortTable(columnIndex) {
            let table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("dataTable");
            switching = true;
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[columnIndex];
                    y = rows[i + 1].getElementsByTagName("TD")[columnIndex];
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        function searchTable() {
            let input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");
            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Cari di kolom Nama
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function editRole(index, currentRole) {
            let roleCell = document.getElementById(role-${index});
            roleCell.innerHTML = `
                <select class="p-2 border rounded" onchange="updateRole(this, ${index})">
                    <option value="Konseli">Konseli</option>
                    <option value="Konselor">Konselor</option>
                    <option value="Tim Konseling">Tim Konseling</option>
                    <option value="Pimpinan">Pimpinan</option>
                    <option value="Admin">Admin</option>
                </select>`;
            roleCell.querySelector('select').value = currentRole;
        }

        function updateRole(select, index) {
            let newRole = select.value;
            data[index].role = newRole; // Memperbarui data
            displayList(data, document.querySelector('#dataTable tbody'), rows, currentPage); // Memperbarui tampilan
        }

        document.addEventListener('DOMContentLoaded', () => {
            displayList(data, document.querySelector('#dataTable tbody'), rows, currentPage);
            setupPagination(data, document.getElementById('pagination'), rows);
        });
    </script>
@endsection
