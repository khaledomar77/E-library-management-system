<div class="panel panel-default">
        <div class="panel-heading text-center">Comments</div>

        <div class="panel-body">
            @include('partial.alert')
            <form action="#" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            <hr>
            
        </div>
    </div>