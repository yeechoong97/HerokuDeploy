<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
use App\Forum;
use App\Comment;
use App\User;
use App\Account;
use App\Order;
use App\Trades;

class ForumControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    protected $user;
    /**
     *
     * @return void
     */
    public function setUp():void {
        parent::setUp(); // performs set up
        $this->user = factory(User::class)->create();
        $this->be($this->user);
    }

    /**
     * @runInSeparateProcess
    */
    public function testForumIndex()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create();
        $tag =  $this->faker->numberBetween($min = 1, $max = 9);
        $response = $this->get('forum/'.$tag);
        $response->assertStatus(200);
        $response->assertViewHas('forums');
    }
    /**
     * @runInSeparateProcess
    */
    public function testStoreForum()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create();
        $response = $this->post('forum/create',[
            'forum_id' => "FOM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
        $this->assertTrue(count(Forum::all())>1);
    }

        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingStoreForum()
    {
        $this->withExceptionHandling();
        $response = $this->post('forum/create',[]);
        $response->assertStatus(500);
        $this->assertTrue(count(Forum::all())<1);
    }

        /**
     * @runInSeparateProcess
    */
    public function testViewForum()
    {
        $this->withoutExceptionHandling();
        $index = random_int(1, 4);
        $tag = random_int(0, 9);
        $forum = factory(Forum::class)->times(5)->create(['user_id'=>$this->user->user_id]);
        $response= $this->get('forum/'.$tag.'/'.$forum[$index]->forum_id);
        $response->assertStatus(200);
        $response->assertViewHas('forums');
    }

    /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForViewForum()
    {
        $this->withExceptionHandling();
        $id = "FOM".random_int(1, 4);
        $tag = random_int(0, 9);
        $response= $this->get('forum/'.$tag.'/'.$id);
        $response->assertStatus(500);
    }

    /**
     * @runInSeparateProcess
    */
    public function testUpdateForum()
    {
        $this->withoutExceptionHandling();
        $index = random_int(1, 4);
        $forum = factory(Forum::class)->times(5)->create(['user_id'=>$this->user->user_id]);
        $response = $this->put('forum/update',[
            'id' => $forum[$index]->forum_id,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
    }

    /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForUpdateForum()
    {
        $this->withExceptionHandling();
        $index = random_int(1, 4);
        $forum = factory(Forum::class)->times(5)->create(['user_id'=>$this->user->user_id]);
        $response = $this->put('forum/update',[
            'id' => $forum[$index]->forum_id,
        ]);
        $response->assertStatus(500);
    }

    /**
     * @runInSeparateProcess
    */
    public function testDeleteForum()
    {
        $this->withoutExceptionHandling();
        $tag = random_int(0, 9);
        $forum = factory(Forum::class)->create(['user_id'=>$this->user->user_id]);
        $response = $this->get('forum/'.$tag.'/'.$forum->forum_id.'/destroy');
        $response->assertStatus(302);
        $this->assertDatabaseMissing('forums', ['forum_id' => $forum->forum_id]);
    }
        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForDeleteForum()
    {
        $this->withExceptionHandling();
        $id_to_be_deleted = "FOM".random_int(10, 20);
        $tag = random_int(0, 9);
        $response = $this->get('forum/'.$tag.'/'.$id_to_be_deleted.'/destroy');
        $response->assertStatus(500);
    }

        /**
     * @runInSeparateProcess
    */
    public function testStoreComment()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create(['user_id'=>$this->user->user_id]);
        $response = $this->post('forum/'.$forum->forum_id,[
            'forum_id' => $forum->forum_id,
            'comment_id' => "COM".$this->faker->randomDigit,
            'user_id'=>$this->user->user_id,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
        $this->assertTrue(count(Comment::all())>0);
    }

        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForStoreComment()
    {
        $this->withExceptionHandling();
        $id = "FOM".$this->faker->randomDigit;
        $tag = random_int(0, 9);
        $response = $this->post('forum/'.$id.'?tag='.$tag ,[]);
        $response->assertStatus(500);
        $this->assertTrue(count(Comment::all())<1);
    }

        /**
     * @runInSeparateProcess
    */
    public function testUpdateComment()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create(['user_id'=>$this->user->user_id]);
        $comment = factory(Comment::class)->create(['forum_id'=> $forum->forum_id]);
        $response = $this->put('forum/comment/update',[
            'commentID' => $comment->comment_id,
            'commentContents' => $this->faker->text($maxNbChars = 50),
            'forum_id' => $comment->forum_id,
            'tagForumID' => $this->faker->numberBetween($min = 1, $max = 9),
        ]);
        $response->assertStatus(302);
    }
    /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForUpdateComment()
    {
        $this->withExceptionHandling();
        $forum = factory(Forum::class)->create(['user_id'=>$this->user->user_id]);
        $comment = factory(Comment::class)->create(['forum_id'=> $forum->forum_id]);
        $response = $this->put('forum/comment/update',[]);
        $response->assertStatus(500);
    }

     /**
     * @runInSeparateProcess
    */
    public function testDeleteComment()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create(['user_id'=>$this->user->user_id]);
        $comment = factory(Comment::class)->create(['forum_id'=> $forum->forum_id]);
        $tag = random_int(0, 9);
        $response = $this->get('forum/comment/destroy/'.$comment->comment_id.'/'.$tag,[
            'forum_id' => $comment->forum_id
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('comments', ['comment_id' => $comment->comment_id]);
    }
        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForDeleteComment()
    {
        $this->withExceptionHandling();
        $id_to_be_deleted = "COM".random_int(10, 20);
        $tag = random_int(0, 9);
        $response = $this->get('forum/comment/destroy/'.$id_to_be_deleted.'/'.$tag);
        $response->assertStatus(500);
    }
}
