{{--@if(Session::has('message'))--}}
{{--    <script>--}}
{{--        import Swal from "sweetalert2";--}}
{{--        Swal("Message", "{{ Session::get('message') }}", 'success', {--}}
{{--            button: true,--}}
{{--            button: 'OK',--}}
{{--        });--}}

{{--        // success--}}
{{--        // warning--}}
{{--        // info--}}
{{--        // error--}}


{{--        // import swal from "sweetalert2";--}}
{{--        // document.addEventListener('DOMContentLoaded', function () {--}}
{{--        //     Swal.fire({--}}
{{--        //         title: 'Are you sure?',--}}
{{--        //         text: "You won't be able to revert this!",--}}
{{--        //         icon: 'warning',--}}
{{--        //         showCancelButton: true,--}}
{{--        //         confirmButtonColor: '#3085d6',--}}
{{--        //         cancelButtonColor: '#d33',--}}
{{--        //         confirmButtonText: 'Yes, delete it!'--}}
{{--        //     }).then((result) => {--}}
{{--        //         if (result.isConfirmed--}}
{{--        //         ) {--}}
{{--        //             Swal.fire(--}}
{{--        //                 'Deleted!',--}}
{{--        //                 'Your file has been deleted.',--}}
{{--        //                 'success'--}}
{{--        //             )--}}
{{--        //         }--}}
{{--        //     })--}}
{{--        // });--}}

{{--    </script>--}}
{{--    @endif--}}
<script>
    function hideMessage() {
        let x = document.getElementById("successfullMessage");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    };
</script>
</body>
</html>
