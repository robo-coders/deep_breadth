<div class="card-content">
    <div class="card-body">
        <div class="form-group">
            <!-- Modal -->
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Enter the following detail </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('survey_form_index') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <label>Depart Name: </label>
                                <div class="form-group">
                                    <input type="text" name="department_name" placeholder="Department" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Get Survey Form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
