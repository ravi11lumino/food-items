<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use App\Models\FoodItem;
use App\Models\Recipient;
use App\Http\Requests\FoodItemRequest;

class FoodItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FoodItemRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(FoodItemRequest $request)
    {
        // Create a new food item based on the validated request data
        $foodItem = FoodItem::create($request->all());

        // Return the created food item as JSON response with status code 201
        return response()->json($foodItem, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Find the food item by its ID
        $foodItem = FoodItem::findOrFail($id);

        // Return the food item as JSON response
        return response()->json($foodItem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FoodItemRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(FoodItemRequest $request, $id)
    {
        // Find the food item by its ID
        $foodItem = FoodItem::findOrFail($id);

        // Update the food item with the validated request data
        $foodItem->update($request->all());

        // Return the updated food item as JSON response
        return response()->json($foodItem, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // Find the food item by its ID
        $foodItem = FoodItem::findOrFail($id);

        // Delete the food item
        $foodItem->delete();

        // Return a success message as JSON response with status code 204
        return response()->json(['message' => 'Food item deleted'], 204);
    }

    /**
     * Get the food items donated by a specific donor.
     *
     * @param  int  $donorId
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexByDonor($donorId)
    {
        // Find the donor by their ID
        $donor = Donor::findOrFail($donorId);

        // Retrieve the food items associated with the donor
        $donor->foodItems;

        // Return the donor information with associated food items as JSON response
        return response()->json($donor);
    }

    /**
     * Get the food items received by a specific recipient.
     *
     * @param  int  $recipientId
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexByRecipient($recipientId)
    {
        // Find the recipient by their ID
        $recipient = Recipient::findOrFail($recipientId);

        // Retrieve the food items associated with the recipient
        $recipient->foodItems;

        // Return the recipient information with associated food items as JSON response
        return response()->json($recipient);
    }
}
