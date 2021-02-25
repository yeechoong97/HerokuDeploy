<div class="mx-auto justify-content-center">
    <p class="mx-auto font-weight-bold text-secondary" id="search-keyword-tag"></p>
</div> 
@if(count($forums)>0)
    @foreach($forums as $forum)
    <div class="card mb-2">
        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <div class="card-link mr-3">
                    <img src="{{$forum->user->avatar}}" class="rounded-circle ml-1" width="50" alt="User" />
                    <small class="d-block text-center text-muted" style="width:60px">{{$forum->user->name}}</small>
                </div>
                <div class="media-body">
                    <h6><a href="{{ route('forum-show',['tag'=>$tagValue,'id'=>$forum->forum_id]) }}"  class="text-body forum-title-link">{{$forum->title}}</a></h6>
                    <p class="text-muted small" id="{{$forum->forum_id}}-duration-id"></p>
                    @if(count($forum->comment))
                        @if($forum->comment[count($forum->comment)-1]->user->user_id == $user_id)
                            <p class="text-muted"><span class="text-secondary font-weight-bold">You</span> have commented on this post recently.</p>
                        @else
                            <p class="text-muted"><span class="text-secondary font-weight-bold">{!!$forum->comment[count($forum->comment)-1]->user->name!!}</span> has commented on this post recently.</p>
                        @endif
                    @endif
                </div>
                <div class="text-muted small text-center align-self-center">
                    <span><i class="far fa-comment mx-1"></i>{{count($forum->comment)}}</span>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @if ($forums->hasPages())         
        <div class="mx-auto my-3 justify-content-center">{{ $forums->links() }}</div> 
    @endif
@else
    <div class="mx-auto my-3 justify-content-center">
    <p class="mx-auto font-weight-bold text-danger">No result was found!</p>
    </div> 
@endif

<script type="text/javascript" src="{{ URL::asset('js/forum.js') }}"></script> 
<script>
    @foreach($forums as $forum)
    var currentDate = new Date();
    var forumCreated = new Date("{{$forum->created_at}}");
    var differentDay = calculateDayDifference(currentDate,forumCreated);
    if(differentDay==0)
        dayMessage = " today";
    else if(differentDay==1)
        dayMessage = " 1 day ago";
    else
        dayMessage = ` ${differentDay} days ago`;
    document.getElementById('{{$forum->forum_id}}-duration-id').innerHTML=`Created <span class="text-secondary font-weight-bold">${dayMessage}</span> `
    @endforeach
</script>