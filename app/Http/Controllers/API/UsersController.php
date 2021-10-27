<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customizedcake;
use App\Repositories\CutomizedcakeRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function cakeQuery() {
        $customizedcake = Customizedcake::all();

        if (count($customizedcake) > 0) {
            return response()->json($customizedcake, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no customized cake in the database'], 404);
        }
    }
}
?>