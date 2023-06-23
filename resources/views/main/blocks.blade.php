@foreach ($blocks as $block)
    @if ($block->block_type_id == \App\Enums\BlockTypeEnum::LEFT)
        <section class="about__area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset($block->image) }}" alt="{{ $block->name }}">
                            </div>
                            @if ($block->show_experience)
                                <div class="about__experience-shape">
                                    <div class="about__experience-content">
                                        <h2>{{ $block->experience_years }}</h2>
                                        <span>{{ __('pages.experienceYears') }}</span>
                                        <div class="about__experience-shape-icon">
                                            <i class="fal fa-trophy-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// {{ $block->name }}</span>
                                <h2>{{ $block->title }}</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    {!! htmlspecialchars_decode(nl2br($block->text)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($block->block_type_id == \App\Enums\BlockTypeEnum::RIGHT)
        <section class="skill__area skill__bg pt-120 pb-60" data-background="assets/img/bg/skill-map.png" data-wow-delay=".3s" style="background-image: url(&quot;assets/img/bg/skill-map.png&quot;);">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill-progress mb-60">
                            <div class="section__title-one s-3 mb-40">
                                <span>// {{ $block->name }}</span>
                                <h2>{{ $block->title }}</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    {!! htmlspecialchars_decode(nl2br($block->text)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill__image-wrapper mb-60">
                            <div class="skill__image pl-25 p-relative w-img">
                                <img src="{{ asset($block->image) }}" alt="{{ $block->name }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach