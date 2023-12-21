<script src="{{asset('Tailwind/js/script.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"
      defer
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script>
      $(document).ready(function() {
          $('#search_data').autocomplete({
                source: "/autocomplete", // Endpoint baru
                minLength: 1,
                select: function(event, ui) {
                    $('#search_data').val(ui.item.value);
                    console.log(ui.item.slug);
                    window.location.href = "{{ url('detail') }}/" + ui.item.slug;
                }
            }).data('ui-autocomplete')._renderItem = function(ul, item) {
                return $("<li class='ui-autocomplete-row sticky bg-white border'></li>")
                    .data("item.autocomplete", item)
                    .append(item.value)
                    .appendTo(ul);
            };
        });
    </script> -->
<script>
    $(document).ready(function() {
      $('#search_data').on('input', function() {
          let query = $(this).val();

          // Lakukan request AJAX untuk mencari menggunakan jQuery UI Autocomplete
          $.ajax({
            url: "/autocomplete",
            type: "GET",
            data: { query: query },  // Change 'term' to 'query'
            dataType: "json",
            success: function(data) {
                // Handle response, misalnya, tampilkan hasil pencarian di bawah search bar
                console.log(data);

                // Memeriksa apakah nilai input kosong
                if (query.trim() === '') {
                    clearResults();
                    console.clear();
                } else {
                    displayResults(data);
                }
            },
            error: function(error) {
                console.error('Ajax error:', error);
            }
        });


      function displayResults(results) {
          let $searchResults = $('#search-results');

          // Kosongkan hasil pencarian sebelum menampilkan hasil baru
          $searchResults.empty();

          if (results.length > 0) {
              results.forEach(function(result) {
                $searchResults.append('<a href="{{ url("detail") }}/' + result.slug + '"><li class="border-black border-2" data-id="' + result.value + '">' + result.value + '</li></a>');

              });
          } else {
              $searchResults.append('<li >No results found</li>');
          }
      }

      function clearResults() {
          let $searchResults = $('#search-results');
          if ($searchResults) {
            $searchResults.empty();
                // Lanjutkan dengan pengolahan data jika elemen ditemukan
            } else {
                console.error("Element not found");
            }
          
      }
  });
})

</script>




