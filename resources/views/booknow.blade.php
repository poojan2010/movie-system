<x-navbar />

<body>
<div class="mt-3" style="margin-left: 400px">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>BOOK </i></b>
        </div>
        <div class="card-body">

            <form method="post" action="{{ url('bookticket') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="m_id" class="form-label"><b>Movie Id</b></label>
                    <input type="number" class="form-control" value="{{$booknow->m_id}}" name="m_id" id="m_id" readonly>

                </div>

                <div class="mb-3">
                    <label for="m_name" class="form-label"><b>Movie Name</b></label>
                    <input type="text" class="form-control" value=" {{$booknow->title}}" name="m_name" id="m_name" readonly>

                </div>

                <div class="mb-3">
                    <label for="person_name" class="form-label"><b>Person Name</b></label>
                    <input type="text" class="form-control"  name="person_name" id="person_name">

                </div>

                <div class="mb-3">
                    <label for="numoftkt" class="form-label"><b>No of Tickets</b></label>
                    <input type="number" class="form-control"  name="numoftkt" id="numoftkt">
                </div>

                <button type="submit" class="btn btn-primary">Book</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
</div>

</body>
