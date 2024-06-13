<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function buy(Request $request, $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create a charge using Stripe
            $charge = Charge::create([
                'amount' => $product->price * 100,  // Convert price to cents
                'currency' => 'usd',
                'description' => $product->name,    // Use product name for description
                'source' => $request->stripeToken,  // Stripe token from frontend
            ]);

            // If payment is successful, redirect to success page with product details
            return redirect()->route('product.success', ['id' => $product->id]);

        } catch (\Exception $e) {
            // If an error occurs during payment processing
            return back()->withError('Payment failed: ' . $e->getMessage());
        }
    }

    public function success($id)
    {
        $product = Product::findOrFail($id);
        return view('products.success', compact('product'));
    }

}
