@extends('layouts.web.master')

@section('title', 'FAQS')
@push('css')
@endpush

@section('content')
    <!--General Section-->

    <section>
        <div class="container my-5" data-aos="fade-right">
            <div class="row mt-8">
                <div class="container py-2 ">
                    <h1 class="mb-4 text-center pb-3">Frequently Asked Questions</h1>
                    @if($faqs->isEmpty())
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('assets/images/faq.png') }}" alt="">
                    </div>
                @else
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="faqHeading{{ $faq->id }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-dark">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                </div>
            </div>
        </div>
    </section>

    <!--General Section-->


@endsection

@push('script')
@endpush
