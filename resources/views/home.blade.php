<div>


  
    <h2 class="font-semibold kurd mt-3 text-2xl text-gray-800 text-center">کاتی بانگەکان</h2>
    <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 gap-4">
@foreach ($Koyas as $in)

@if (($in->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">کۆیە</span></p>
                <img src="image/koya.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">
        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Akres as $in1)
@if (($in1->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">ئاکرێ</span></p>
                <img src="image/akre.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">
        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in1->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in1->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in1->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in1->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in1->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Amedis as $in2)
@if (($in2->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">ئامێدی</span></p>
                <img src="image/amedi.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in2->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in2->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in2->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in2->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in2->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Arbats as $in3)
@if (($in3->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">عەربەت</span></p>
                <img src="image/arbat.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in3->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in3->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in3->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in3->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in3->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Bazyans as $in4)
@if (($in4->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">بازیان</span></p>
                <img src="image/bazian.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">


        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in4->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in4->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in4->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in4->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in4->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Chamchamals as $in5)
@if (($in5->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">چەمچەماڵ</span></p>
                <img src="image/chamchaml.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in5->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in5->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in5->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in5->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in5->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Chwartas as $in6)
@if (($in6->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">چوارتا</span></p>
                <img src="image/4ta.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in6->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in6->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in6->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in6->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in6->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Darbandixans as $in7)
@if (($in7->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">دەربەندیخان</span></p>
                <img src="image/darbandixan.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in7->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in7->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in7->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in7->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in7->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Duhoks as $in8)
@if (($in8->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">دهۆک</span></p>
                <img src="image/dohuk.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in8->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in8->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in8->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in8->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in8->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Dukans as $in9)
@if (($in9->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">دۆکان</span></p>
                <img src="image/dokan.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in9->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in9->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in9->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in9->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in9->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($HajiAwas as $in10)
@if (($in10->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">حاجی ئاوا</span></p>
                <img src="image/hajiawa.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in10->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in10->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in10->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in10->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in10->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Halabjas as $in11)
@if (($in11->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">هەڵەبجە</span></p>
                <img src="image/halabja.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in11->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in11->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in11->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in11->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in11->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($HalabjaNs as $in12)
@if (($in12->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 item-center bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">هەڵەبجەی تازە</span></p>
                <img src="image/halabjaitaza.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in12->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in12->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in12->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in12->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in12->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Hawlers as $in13)
@if (($in13->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">هەولێر</span></p>
                <img src="image/hawler.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in13->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in13->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in13->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in13->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in13->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Kalars as $in14)
@if (($in14->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">کەلار</span></p>
                <img src="image/kalar.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in14->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in14->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in14->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in14->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in14->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Kfris as $in15)
@if (($in15->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">کفری</span></p>
                <img src="image/kifri.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in15->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in15->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in15->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in15->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in15->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Kirkuks as $in16)
@if (($in16->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">کەرکوک</span></p>
                <img src="image/karkuk.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in16->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in16->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in16->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in16->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in16->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Penjuins as $in17)
@if (($in17->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">پێنچوێن</span></p>
                <img src="image/penjuen.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in17->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in17->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in17->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in17->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in17->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Piramagruns as $in18)
@if (($in18->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">پیرەمەگروون</span></p>
                <img src="image/piramagrun.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in18->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in18->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in18->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in18->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in18->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Qaladzes as $in19)
@if (($in19->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">قەڵادزێ</span></p>
                <img src="image/qaladze.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in19->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in19->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in19->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in19->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in19->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Ranyas as $in20)
@if (($in20->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">ڕانیە</span></p>
                <img src="image/ranay.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in20->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in20->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in20->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in20->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in20->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($SaidSadiqs as $in21)
@if (($in21->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">سەیدسادق</span></p>
                <img src="image/saidsaq.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in21->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in21->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in21->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in21->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in21->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Slemanys as $in22)
@if (($in22->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">سلێمانی</span></p>
                <img src="image/sulimany.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in22->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in22->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in22->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in22->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in22->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Sorans as $in23)
@if (($in23->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">سۆران</span></p>
                <img src="image/soran.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in23->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in23->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in23->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in23->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in23->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Takyas as $in24)
@if (($in24->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">تەکیە</span></p>
                <img src="image/takia.jpg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in24->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in24->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in24->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in24->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in24->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($TaqTaqs as $in25)
@if (($in25->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">تەق تەق</span></p>
                <img src="image/taqtaq.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in25->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in25->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in25->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in25->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in25->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach

@foreach ($Taslujas as $in26)
@if (($in26->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">تاسلوجە</span></p>
                <img src="image/tasluja.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in26->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in26->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in26->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in26->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in26->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Xalakans as $in27)
@if (($in27->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">خەلەکان</span></p>
                <img src="image/xalakan.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in27->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in27->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in27->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in27->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in27->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($Xanaqins as $in28)
@if (($in28->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">خانەقین</span></p>
                <img src="image/xanaqin.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in28->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in28->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in28->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in28->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in28->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($mosuls as $in29)
@if (($in29->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">موصل</span></p>
                <img src="image/musl.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in29->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in29->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in29->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in29->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in29->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($tuzxurmatus as $in30)
@if (($in30->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">دووز خورماتوو</span></p>
                <img src="image/duzxwramatu.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in30->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in30->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in30->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in30->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in30->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


@foreach ($zaxos as $in31)
@if (($in31->D)==$katakan)
<div dir="rtl" class="max-w-sm kurd mx-auto my-4 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-2">
        <p class="text-green-500 text-sm mt-1">کاتی بانگی ئەمڕۆ بە ئاسۆی شاری: <span
                class="text-gray-800">زاخۆ</span></p>
                <img src="image/zaxo.jpeg" class="w-64 h-[140px] filter grayscale-0 hover:grayscale" alt="ئیسلام ڕووناکیە">

        <div class="justify-between text-center mt-2">
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <div>
                    <p class="text-gray-700">بەیانی</p>
                </div>
                <div>
                    <p class="text-gray-700">نیوەڕۆ</p>
                </div>
                <div>
                    <p class="text-gray-700">عەسر</p>
                </div>
                <div>
                    <p class="text-gray-700">ئێوارە</p>
                </div>
                <div>
                    <p class="text-gray-700">عیشا</p>
                </div>

                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>
                <div>
                    <p class="text-gray-700">:</p>
                </div>

                <div>
                    <p class="text-gray-700">{{ $in31->bayani }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in31->niwaro }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in31->asr  }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in31->eywara }}</p>
                </div>
                <div>
                    <p class="text-gray-700">{{ $in31->esha }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
@endforeach


            </div>
            </div>
        


</div>


</div>
