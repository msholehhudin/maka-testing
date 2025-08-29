<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\fs;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'ok';
        $search = request()->query('search');
        return response()->json($this->userService->list($search));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = $this->userService->create($request->validated());

        return response()->json([
            'message' => 'User Created Successfully',
            'data' => $user
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $this->userService->update($user, $request->validated());
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user);
        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }

    public function number1()
    {
        
        for($x=1; $x <= 100; $x++){
            if($x % 3 == 0 )
            {
                echo "Mari" . ',';
                // str_replace($x, 'Mari');
            }
            elseif($x % 5 == 0){
                echo "Berkarya" . ',';
            }else{
                echo $x . ',';
            }
        } 
    }

    public function number2()
    {
        for($x=0; $x < 9; $x++)
        {
            for($y=1; $y<= $x; $y++){
                echo '_';
            }
            for($z=1; $z<= 9- $x; $z++){
                echo '_*';
            }
            echo '<br>';
        }
    }
}
