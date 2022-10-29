@extends('layouts.app')

@section('content')
    <div class="my-16 text-white">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
            }

            #ibx5 {
                margin: 0 auto;
            }

            .object-contain.object-center.w-full.h-full.px-8.lg\:px-16 {
                width: 464.20000000000005px;
                height: 221px;
            }

            .p-8.space-y-4.text-white.rounded-sm.bg-secondary-600 {
                font-size: medium;
            }

            #idnuw {
                background-color: rgb(65 90 97/var(--tw-bg-opacity));
                color: rgb(255 255 255/var(--tw-text-opacity));
            }

            #i06yk {
                background-color: rgb(65 90 97/var(--tw-bg-opacity));
                color: rgb(255 255 255/var(--tw-text-opacity));
            }

            #ilb3f {
                background-color: rgb(65 90 97/var(--tw-bg-opacity));
                color: rgb(255 255 255/var(--tw-text-opacity));
            }

            #irz7x {
                background-color: rgb(65 90 97/var(--tw-bg-opacity));
                color: rgb(255 255 255/var(--tw-text-opacity));
            }

            #i3x6t {
                text-align: center;
                margin: 0 auto;
            }

            .button.group.--has-trailing.--is-tertiary.--translate-icon-on-hover {
                text-align: center;
                margin: 0 auto;
            }
        </style>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big"></div>
        <div data-block-section="" class="w-full">
            <img alt="" style="margin: 0 auto" class=""
                srcset="https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_660_225.jpg 660w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_552_188.jpg 552w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_462_158.jpg 462w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_386_132.jpg 386w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_323_110.jpg 323w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_270_92.jpg 270w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_226_77.jpg 226w, https://sqp.fr/storage/blog/posts/11/medias/45908/responsive-images/NS1___media_library_original_189_64.jpg 189w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNjYwIDIyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjY2MCIgaGVpZ2h0PSIyMjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBQ3dBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBK2ZkUStLYzk3cGZsU044cEdLK2hkVnlWajVWWU9NTlVlVDZBc2MvaWk3dWNodDJldGVSV1RjdEQxYWRhRkNIdnV4Sm9VaTZCNHZtdWR3Qlk1QXJhZ3VVd3IxSTRoZTZlbDY3OFVybVhTRWlEY2RLOUgycjJPSllLRjdubWwweC9zNWVUMHJtUFVsc2MxbzAwa1Z6Y0ZHS24xRmNyM1Buc3cxYVRHeFR5UzZzUzdsajcwNGJuWmdrbEE2TFUyUDhBWjhmTmRaNjNRLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45908/NS1.jpg" width="660"
                height="225">

        </div>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
            <div data-block-grid="" class="grid my-8 lg:my-16 gap-y-16 gap-x-8 lg:gap-16 md:grid-cols-2">
                <div class="space-y-8">
                    <div class="p-8 text-white rounded-sm bg-secondary-600">
                        <h3 class="text-2xl font-medium text-primary-500">3 ou 5 ans</h3>
                        <p id="ihwje">échange J+1 pour NAS <b>Synology ou QNAP</b>, avec un service Premium</p>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="p-8 text-white rounded-sm bg-secondary-600">
                        <h3 class="text-2xl font-medium text-primary-500">Service centralisé</h3>
                        <p id="i3uti">Support en direct avec nos experts, suivez les échéances des garanties</p>
                    </div>
                </div>
            </div>
        </div>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
            <div data-block-grid="" class="grid my-8 lg:my-16 gap-y-16 gap-x-8 lg:gap-16 md:grid-cols-2">
                <img alt="" style="" class="object-contain object-center w-full h-full px-8 lg:px-16"
                    srcset="https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_851_567.png 851w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_711_474.png 711w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_595_396.png 595w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_498_332.png 498w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_416_277.png 416w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_348_232.png 348w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_291_194.png 291w, https://sqp.fr/storage/blog/posts/11/medias/45925/responsive-images/NS13___media_library_original_244_163.png 244w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgODUxIDU2NyI+Cgk8aW1hZ2Ugd2lkdGg9Ijg1MSIgaGVpZ2h0PSI1NjciIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRlFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1JyNDY2aHEya2ZCSDRoWDJnM0VscHJ0cjRkMUdld3VJZnZ4WEMyMGhpWmM5dzRVajZVQWZnN3BIN1VYeGRtTzJYNHRlUEdJOWZFOTcvOEFIYUFOVnYya3ZpcWtUZVY4VmZIRVE1YkNlSmIwREpPU2VKZXBKSi9HZ0Q5ei9nZHEycTYvOEZmaC9xZXUzRDNXdDN2aDdUN20vbmRRclNYRDIwYlNNUUFBQ1dMSEFBSE5BSHcxOFp2K0NrM2pyU3Rla2k4SytGZkRkcDRmZEdqV0h4REhOZVhNdzNOODcrVk5HaUJrS1pqK2ZCRGZPd0l3Q3VmR00rcCtFZkZYaTZQV3JuNGIrRWRJWHpwcDd2VGRHT28yMW5lR1QrRm8vdGg4cFVPU3F3R0lET0NDQUFBWjYvNEkrS253VDhBM3JYdHIrek5vR3QzaGphSm0xSHhMZFhWc1ZPRHhiM2Nkd2diajczVWRBUms1Qkh2TS93RHdWaXU5TVNLSmZnOUFrWUFWRVR4UGdLQjBBSDJQcFFNK2l0Ui80SitmQVhWbkQzZmdtZWRoMExhOXFYL3lSUUJWai80SjBmczl4SEtlQXBWUHRyK3Avd0R5VFFCTW4vQlBUNEFvQ0Y4RFRBSC9BS2oycGY4QXlUUUF5WC9nbmIrejlQanpQQWtyWTZaMTdVdi9BSkpvQS8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                    sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45925/NS13.png" width="851"
                    height="567">

                <div class="flex items-center">
                    <div class="p-8 space-y-4 text-white rounded-sm bg-secondary-600">
                        <h3 class="text-2xl font-medium text-primary-500">Gagnez en sérénité</h3>
                        <p id="il3og">Assurez votre matériel NAS QNAP ou Synology, avec ou sans disques durs, en
                            souscrivant une garantie J+1</p>
                        <p id="ix3hs">Récupérez un matériel fonctionnel en J+1, pour un impact minimal sur votre
                            production</p>
                    </div>
                </div>
            </div>
        </div>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
            <div data-block-grid="" class="grid my-8 lg:my-16 gap-y-16 gap-x-8 lg:gap-16 md:grid-cols-2">
                <div class="flex items-center">
                    <div class="p-8 space-y-4 text-white rounded-sm bg-secondary-600">
                        <h3 class="text-2xl font-medium text-primary-500">30 jours pour se décider*</h3>
                        <p id="icsg3">Assurez votre matériel en souscrivant une garantie J+1</p>
                        <p id="ijqzm">
                        <div>Moins de stress et de questions à se poser quand le matériel tombe en panne</div>
                        <div>*à partir de la date d&#039;achat du materiel</div>
                        </p>
                    </div>
                </div>
                <img alt="" style="" class="object-contain object-center w-full h-full px-8 lg:px-16"
                    srcset="https://sqp.fr/storage/blog/posts/11/medias/45917/responsive-images/NS9___media_library_original_348_174.png 348w, https://sqp.fr/storage/blog/posts/11/medias/45917/responsive-images/NS9___media_library_original_291_146.png 291w, https://sqp.fr/storage/blog/posts/11/medias/45917/responsive-images/NS9___media_library_original_243_122.png 243w, https://sqp.fr/storage/blog/posts/11/medias/45917/responsive-images/NS9___media_library_original_203_102.png 203w, https://sqp.fr/storage/blog/posts/11/medias/45917/responsive-images/NS9___media_library_original_170_85.png 170w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzQ4IDE3NCI+Cgk8aW1hZ2Ugd2lkdGg9IjM0OCIgaGVpZ2h0PSIxNzQiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRUFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1RqeHI0ejBmNGVlRmRUOFI2L2V4NmZwR25RbWFlZVE5QjBDcU9yT3pFS3FqbG1aVkFKSUZBYm53SCswTCszdnB2eFk4TTMzZ1RSZkIyc2FQcHVxeFc3UzZ4ckYxSGJUeE1sd3NqeGlDTHpBNk1rWVhjWlYrK3dLNEh6TlI1MW95bEwyY2s1STZIOW43OXQzVHZocDhPYlR3cHIzaFh4THJrZWpxMFZwcVdreVJYWm1oTWtqS2pMTEpINVlqUXh4cW9aeHRVZmRBQXFXdVJhc3AvdkpOeFI5dmVFUEYramVQZkRXbitJUEQrb1JhcG85L0g1bHZkUTV3d3lRUVFRQ3JLd0tzckFNcktWWUFnaWhPK3FJYWFkbWVCL3RrYXJxdXJyNFgrSDF2L1owZWllSllieTgxQ2U3amN6SzFqSmEzRUtSTUhDcVhmNVR1VnM1QUdLNHNYVmRPRmwxT3pDd1VwM2ZRL09iOXFPY2FWcU50SEhhQ0F4RGJ1VVl6VHdNbmE3WmVNU2IwUFJQMlJMTy93REVHazNYMm1CWGdJd0N3elhObUZlMmtUWEJVOWJzKzQvMlVML1dkQmsxN3dIZkxwNTBmUjRJTC9USkxKR2FYRjFQZFNUTGNPSFpBd2JidFhDTmpkdzJNalhBMUpUcDJsME1zYkNNYW5OSHFmL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                    sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45917/NS9.png" width="348"
                    height="174">

            </div>
        </div>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
            <div data-block-grid="" class="grid my-8 lg:my-16 gap-y-16 gap-x-8 lg:gap-16 md:grid-cols-2">
                <img alt="" style="" class="object-contain object-center w-full h-full px-8 lg:px-16"
                    srcset="https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_324_420.png 324w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_271_351.png 271w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_226_293.png 226w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_189_245.png 189w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_158_205.png 158w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_132_171.png 132w, https://sqp.fr/storage/blog/posts/11/medias/45916/responsive-images/NS8___media_library_original_111_144.png 111w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzI0IDQyMCI+Cgk8aW1hZ2Ugd2lkdGg9IjMyNCIgaGVpZ2h0PSI0MjAiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBS1FBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBKzcvaUpMNE8rRkhoeHRkOFYyV2w2UnBnbFdCWkgxTzdrZVNSczRTT05JbWQyd0diQ3FTRlZtUENraE5xS3V5b3hjM2FLUE12MmpQRytuK0Mvd0JuNjI4VytGTEt3dHJ6eE1MVzM4UDZpODF6TUFiaERLSmZKa1JNTUlGbGRSSU1CZ29aVzVVbDlMampCdVhLVWYyT2RldmZpZjRSMXJUZkZFTmg0ZzhUNkxkS1pid3lTMmJTV3N3TFFzNnhvWXkyNUowK1FMOHFKbGNrc3lpK1pYSFVnNE96TzgrR3ZqYndSOFUvRlBpdnczcFdoUVd1dStHOVF1TEM2c0wvQUZPV09TWVF5K1U5eENGRGI0dDRLNTRZSGJ1VmR5N2twS1RhWFFKUWxGS1QyWjVYKzEwOXo0Vlh3WHU4UFJhWnBRdWJpOWx0THVYN1piWFZ4Q0l4Q0pEMitTV2NiY2pjSGY4QXU4UDJVNjA0eGlyblZoWEZjemJzN0h4eHFueGErSVBpN1NwZkM4dmlBUzZFM2x4ZjJmYjJWdkJDRWpaV2pBRWNhNDJsRnhqb01nY0VnKzFpYUVNTkZPY2JIREdUNTdwbm8zZ1Q0aGVKL2hqb3F3MitxeEpZbTRGMVBwOTVDSklKNUFvWDU4WWNjREh5dXA5NjVhVUk0dEtOQ04yWE9XdDVuci93bDhjei9GTDQxZUY3OUxDenZMdDdLYXl2TlAwanpZb1h0MGpta0RPMGp1eUR6V2k1M0FaVkIxUFBKaU1EaWNOVlVxc2JJNithbDlYY1l5dXo2TStKL3dBRXRJK0tuZ1M2OE9hajRVMUMwOHdLWUxtMzFHSnBMUjFCY1BFWFpncDNsbFB5OG83L0FONHJXMkd4RThMVlZXRzZQUGxIbVZqOCt2aUYrei9yUDdOL2l1MHNkVzFheTFjM2tKdWJmeVNzZHlxQUlHYVdFTy9scVpESXFIZWQ0aVk4RUZSOUZtT1BXYzRmbDVMTkhIVFN3MC9la1U3VHdaNGkrTTJwMkhoN3czREZMcStveUZJa251RWhRQUFzN0VzUmtLb1ppRnkyRk9BVHhXT1IxYWVVTjFLeXVrWGlKTEVlN0JuMm4relgreVphZkE3d2t6YXhvVng0bThaWHFBWDJvL2E0NDRZMTI3dkl0OE9HV01QdEJKNWZhSE8zNVlrNXMxeldybWRWeWxwRmJJdWpTVktOdXAzL0FJMzhINjAvZ3J4QXZodndQOW04UkhUcmdhWk4vYXlQc3V2S2J5VHRrT3c0ZmJ3M3krdkZlTEMzTXViWTFuZmxmTHVmblpZMjhOL3JWMXBuaTdVTDN3YnFCQmE4dWRTMDZTYTVTY2dNUFBqWmxrRzRITzQ1UEl5TUVrZlorMGhHanpVSXBueGlveWRkcXZKb2wrSU9rNmY4STljR2wyL2k2dzhVejJwM1R5MkM3RGFUcTJjYmxkMHlPT1Zjc3JCZ3dVZ1pyQzFZNGltM1VoWTZzUmhYVGt2WnkxUHNqOWxNZUtmRzN3aHROVjhVK0RadFRhVzRiK3pOUnVyeHJXYThzZGlORks2czN6NUxPRmt3dTlGUnZtSkx0OHBpMVRWVit5MlBvY0s2anBMMm01OUFwYlhSdDVDK2hheXM0WDVFWFdpVkoyamd0NTJRTjJSbkI0QVBmQTR6clBIUDJqUGdGcFh4UThENnhxcitEYjlQR1ZoWitaWTZqRGRtNW5jUjdaR2hJRXVaZDJKSTFVcTJOKzVRR09CMFVxODZUOTE2R05TbENwckphbnpyK3pMK3owOXo4VmJrZU5QaFJxZXA2U2RHbHZyS1hXN0c0dFlvcmxabGlFYmVZeVJFc3NrakZKRlp4NWFPZ0FCTGExTVZVbXJKNkFxRUZyWSs3VXRybzI4alBvV3NyT0I4aUxyUktrN1J3Vzg3SUc3SXpnOEFIdmdjUnNkalFBVUFGQUJRQi8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                    sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45916/NS8.png" width="324"
                    height="420">

                <div class="flex items-center">
                    <div class="p-8 space-y-4 text-white rounded-sm bg-secondary-600">
                        <h3 class="text-2xl font-medium text-primary-500">
                            <div>Avec NASExchange</div>
                        </h3>
                        <p id="iyrjk">
                        <div>retrouvez toutes vos garanties J+1 dans une interface unique avec toutes les dates de fin de
                            support pour tous vos équipements.</div>
                        <div>En cas de panne, communiquez directement avec le support SQP et organisez le remplacement
                            anticipé du matériel. <br /><b>Avec NASEXCHANGE</b>, facilitez votre activité et ne perdez plus
                            de temps en cas de panne !</div>
                        </p>
                    </div>
                </div>
            </div>
            <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
                <div data-block-grid="" class="grid my-8 lg:my-16 gap-y-16 gap-x-8 lg:gap-16 md:grid-cols-2">
                    <div class="flex items-center">
                        <div class="p-8 space-y-4 text-white rounded-sm bg-secondary-600">
                            <h3 class="text-2xl font-medium text-primary-500">Efficacité et rapidité</h3>
                            <p id="i0dsa">
                            <div>Quand un incident survient il est important de pouvoir repartir le plus vite possible et
                                de<b> limiter l&#039;impact d&#039;une panne matérielle sur son activité
                                    professionnelle.</b></div>
                            <div>Les <b>garanties J+1  </b><span id="idnuw"><b>SQP</b> vous assurent une reprise
                                    d&#039;activité rapide, sans avoir à </span><span id="i06yk">attendre un retour SAV
                                    du fabricant </span><span id="ilb3f">souvent long et sans aucune </span><span
                                    id="irz7x">garantie de temps de traitement.</span></div>
                            </p>
                        </div>
                    </div>
                    <img alt="" style="" class="object-contain object-center w-full h-full px-8 lg:px-16"
                        srcset="https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_409_467.png 409w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_342_390.png 342w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_286_327.png 286w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_239_273.png 239w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_200_228.png 200w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_167_191.png 167w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_140_160.png 140w, https://sqp.fr/storage/blog/posts/11/medias/45914/responsive-images/NS7___media_library_original_117_134.png 117w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDA5IDQ2NyI+Cgk8aW1hZ2Ugd2lkdGg9IjQwOSIgaGVpZ2h0PSI0NjciIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBK2xmMm9QaTJudys4RTNtbWVFWURGNDZ1b1dlSzMxUFRZQkphMm9CTTF5cVJ3Tjh5cUdaZk1aRitWMnkvbG1OdGFMZzZpVWhUakp3Y2xvZWJmc3AvdEVSUHArbzZiOFZQRmRwYzNNa3lmMlRJZEt0bzVRZ1FtWHpwMmlFVzNJWFp1Ty9POEVrRkFQYXhPVzFuSDIxS20rWHFlTlN6SER4cWV3blVYTWZWdW5YbWg2ell3WDJuYWRxMm9XTTY3NGJxMDBxeWxpa1gxVjFqSUk5d2E4QTlvbWl0N01SSUpkRDExNUFvM01taDJpZ251UVBMT0I3Wk5BSHkxNDQvWlQrTS9pL1h2R0Z4YXdhSll4YWxmeUxCYzNGNGduZTAyYklsRHh4RXFCQy9sT1BsM2xHeUdHR091QnFmVnNSN2FhdWd4c1ZpY043R0RzejVCOExYOTk0VThUTnBIaUxTcnpSOVN0bVFUNmZxZHM5dlBEdVVNdStOd0dYS3NyREk1QkI2R3YyYU9MaG1PWFNqUld0ajhZcVlPV0F6R002cjJaOTVmczJXOS80czBQVkxlTHc5ZTN1Z3dySEpwbDRvTnBHV2FTVDdRSTVYVXBMdGRNWUdTcGQ4NTQyL2lYczZsR3BLblYzVFAybjJ0T3RUalVwOVVlenQ0Q25MTVI0U3VsQlp5QU5YaXdBd3dCOTNvdlVmcnVIRlVTYWtmaCtTT1h6QjhQb1MyMVZ3MnBvd3d1TWNIalB5ako3ODV6azVBUGluL2dvNXAyZ2FQUDRKMUNmUUg4UGVKM2U1SmUzdW9wWXBiTWJTeXlnRGVwV1JsTVlCQ0FOUHhuR1BmeXJIVmNKS1hLL2RQQ3pQQlU4V28zV3FLSDdNWHhoMEw0VG54THAzaXpTWkpyYU52dEFzWmcwTnhiMzhSOHVXRm90bVN6aFZCRXBDb1lNWStZMUdNVHhrL2F4NmxZUnJCdzluSXJRL3RLL0ZlRHhYQjhTNS9oczJ1ZkNPNXZ6bzBtajZQWW1RUUdXWGFyd3lyaVNTWU13akRzQkV6dHNWWTJLYlBNcTA0MC9kVDFQVHBWSlZGZHJRKzV2L0FBZ3E1am9QanY4QWI0OEV5NlpkK0UvaVZZdjRkbHVyS2FMVFpyZlRnSjRsS085eGJ5UEF5bENtL3dBMVhMbkRiNDF3Y211eWc3M2crcHlWMWEwMTBQWXZIZndKOEIvdEhXbmh2eFpjU2VITlBXNFMyMUJiblM3dVRUNWRRdFdRTXNGeXVNN1dVcUNRRmxYQUN1bklPQ3FUcDNTWnJLbkdwWnRIcmRwWVc5aERhd1dzWGdDMXQ3V0lRUVFRZkpGSEdBQUZWQjhvQUNnRGpnY0RHVFdXNXRzZDdGbytvd3NXam4wcU5qS1ppVjAxZ2ZNSUlMLzY3N3hCSXoxNW9BK2ZmMm9QMlRmSFA3UndzZE1nK0xzZmcvd2piUVJLM2grejhNcEtrczZNNTgxcHZ0Q1NiU0dqSGxaS1poUnNiZ0NLakp4ZDBKcm1WbWVoL0FiNEthdjhGZmhOby9ncTQ4VFdmaWlTeGlrZ2wxUzcwcGtrdVkybGthTkdYN1EzeXhvNGpVWklDb0FNRGlrM2QzQksyaDNnMEc5Q1JvSk5JQ1J1c2lML0FHWTJGWlFGVmgrOTRJQUFCN0FDa00vLzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                        sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45914/NS7.png" width="409"
                        height="467">

                </div>
            </div>
            <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
                <img alt="" style="text-align: center;margin: 0 auto" class=""
                    srcset="https://sqp.fr/storage/blog/posts/11/medias/45919/responsive-images/Logo_NS___media_library_original_59_64.png 59w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTkgNjQiPgoJPGltYWdlIHdpZHRoPSI1OSIgaGVpZ2h0PSI2NCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJd0FnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEErb3YyZ1Aya2RSK0YzaVBUTkE4T2FlbDFydDNaeDZqYzNHcVBNbHVsc1ZhRHl3a1U0WnB2TWhseThoeW0wRDUrQ3U5T2w3UStmemJObzVZbys3ZHM4aCtNL3dBZmRUK082YUw0ZnNmRGMwQXRMaEx1R3h0SnBkUXU1NVVoWkJoUXVUanpac2tLU3dLazQyNHJwaFRWSjgwbWZKNWhtbGJPS1NvWVdrN2ZlTitEL3dBZE5TK0JrV3I2RHFIaHA1bXViaVM5TnJmUExZM2RyTzhDeEVsU01qSWppR2NCbEcvQithaWROVlh6UllzdnpXdGxGSjBNVFNlbnlQWmZnTCswZGZmRmpYZFk4TitJckZMUFZiUzFiVnJhWFRaSnBJSjRFMndMQ3lTVEZoTUpKb21ESzM3d2orQmxCUE5WcGV6UHJjcHphT1pxWHUyYVBIUGpQOFQ3VDQ1K0x2Q1drNkJZWHRnbjJoYkJMblZ3bm1TM2R6SkZFQ0FIa0lqR3hEbG5MSGRnOFJwamVFSFNUa3o1ak1zYlJ6bXRTd3REYSsvcWRmOEFFdlZaUDJldGI4RWVGUEMwT3A2SG8wRERWTlV1bS9jWE9zU0xOdGtpbGtUSG1MdFVuaG1BRXloU3FxQU00UjlyZHZjOVhNTVYvWXNhVk9qSDNPdm1NK0R5ei90QjZINHU4SWVKRm44VFFXMDBkM2E2a1dIMjNUNXB4TjgvbTVDOEZDd1hDN3NGR0pUQ0FtdlpTVGlWbHRiKzJNUE9HSWpkZFBtY2Y4Q3ZpamJmQlR4TDRsMHp4RHAxOWMrWTR0SlpkSzIrYmJYZHU4a1pEQXZHeFQ1M3lWY01OdUFNU1BXdFNEcXBTUjR1VlkramxGYXJoYSttdjVCOFp2aFVQZ0w0ejhPM2VpM2QxcmVueFN4YWhBMSt3anVZNW9YU1VKSVVRQmR3SzRPQTJWZktnQlN4Q282c1hGaGpjdXBaTmlLV0lvdlMreDYvKzFCcmVsZU12MmJianhmWlg5cnFUSkZZMzlnTG15SDJxM1M0dm9vNVFraFlsQmxpakt1Y0NORkpQVnVlbGVNMGo2bk9Jd3hHWFRudm9tdndLLzdObXJhVDRIL1pRdGZGV3E2aWRPdEdPbzZoT0xHMkMzTXNrViswQVpaTndCbFpRa0trNEpFaXFTVlFBS3ByVWFLeWx4b1piQ2IyczMrSjViOENQZzljL0h6eEo0cjFUVjdxZlNMQ0l0ZjNrOW9wbG5sdXJpUjVOc2VWSVlEYTVZOWNsQUFkeEk2cDFIU1NpajVMQTVaVHppdlZ4Tlo2WFBhL2lyOEUxK0wvQU1SdEoxdS84Vlg5ckJhVzhVZDFwcmFidmd1b0RMdUhrbGJnTWhPNW96SWdZUHRqMjVmQms1SVZIQk5JKzJ4bVcwOGJPRTZqK0hvWUg3WU92UmVIUGh6cDN3L3MyRnhZNnpGYnQ1cXA1Y0VGdGFQREt2bEtHMjhzc1lHd0JRdTROdWJCRjBZODBybmw4UVluNnRnL1l4V3N0UHVNcjlrVDRndnEvZ0xWL2hkZFc4RTJuV3RyTEpheVJSTE45cGh1YnZFc1VpT1FwSmU1WlNTMkNyTHdwUmpKVmVQTExtUmx3L2pQck9IK3JUalp4WDNwbmY4QXdqK0NrSHdKOGJhL3J3OFhYYzYzMmxiclRSNXROYUtLM2dhWGVCTisrYnpKVTJDTldZcGd5TVBtTDRHTTV1YVZ6MmNGbDFQQXpuS205SmREMG40bWVMTlc4TytJNG90UHZHZ2prdEVaa0txNHp2ZmtCZ2NINmRjRDByTTlZOFkvYVh1NWRhZTF1TDByTlBwV3N5VzluTHNVTkRHMjhzb0lBeUNZbyt1ZnVDdGFmVThQTllwd2cydFUwYW43Tk9sV3NldGZGZnhBc0lYV2JqeGliU1M4Qk84d203VnlnN0tDMGprZ1l6eG5JVVlKdlJJMndNSXFWV2R0WEpub21qK050YnZKZkQ4azE4ek5jYWk5cktBaUFQSCs0NElBeG41bTU2ako1ckk5WS8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                    sizes="1px" src="https://sqp.fr/storage/blog/posts/11/medias/45919/Logo_NS.png" width="59"
                    height="64">

            </div>
        </div>
        <div data-block-section="" class="w-full p-4 mx-auto max-w-big">
            <div class="flex"><a href="https://docs.sqp.fr/index.php/s/16eG9bWv6uB2AOI" target="_blank"
                    class="button group --has-trailing --is-tertiary --translate-icon-on-hover">fiche produit</a></div>
        </div>
    </div>
@endsection
