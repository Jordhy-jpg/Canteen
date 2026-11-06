@extends('layouts.app')

@section('title', 'Contact Us')

@section('body')
    <div class="container py-5">
        <h1>Contact Us</h1>
        <p class="lead">Have a question? We’d love to hear from you.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Get in touch</h2>
                <p>Contact the team at Meadow &amp; Co. for product questions, order support, or general inquiries.</p>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> <a href="mailto:hello@meadow.example">hello@meadow.example</a></li>
                    <li><strong>Phone:</strong> <a href="tel:+12025550148">(202) 555-0148</a></li>
                    <li><strong>Address:</strong> 125 Willow Lane, Suite 200, Portland, OR 97205</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Office hours</h2>
                <ul class="list-unstyled">
                    <li><strong>Monday–Friday:</strong> 9:00 AM–5:00 PM Pacific</li>
                    <li><strong>Saturday–Sunday:</strong> Closed</li>
                </ul>
                <p>We typically respond to emails within two business days.</p>
            </div>
        </div>
    </div>
@endsection
