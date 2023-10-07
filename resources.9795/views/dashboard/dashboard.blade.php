<x-master-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('booking.index') }}">
                            <div class="card total-booking-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                                                <h4 class="mb-2 booking-text  font-weight-bold">{{ !empty($data['dashboard']['count_total_booking']) ? $data['dashboard']['count_total_booking']: 0 }} </h4>
                                                <!-- <h4 class="mb-2 booking-text  font-weight-bold text-break"> 000000000000 </h4> -->
                                            </div>
                                            <p class="mb-0 booking-text">{{ __('messages.total_name', ['name' => __('messages.bookings')]) }}</p>
                                        </div>
                                        <div class="col-auto d-flex align-items-center flex-column">
                                            <div class="iq-card-icon iq-card-icon-booking icon-shape  rounded-circle shadow">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.52083 14.7917L6.5625 12.8542C6.4375 12.7292 6.375 12.5799 6.375 12.4062C6.375 12.2326 6.4375 12.0764 6.5625 11.9375C6.67361 11.8264 6.82292 11.7708 7.01042 11.7708C7.19792 11.7708 7.35417 11.8264 7.47917 11.9375L9.02083 13.4583L12.3958 10.0625C12.5347 9.93749 12.691 9.87846 12.8646 9.88541C13.0382 9.89235 13.1875 9.95832 13.3125 10.0833C13.4236 10.2222 13.4826 10.3785 13.4896 10.5521C13.4965 10.7257 13.4375 10.875 13.3125 11L9.52083 14.7917C9.38195 14.9305 9.21528 15 9.02083 15C8.82639 15 8.65972 14.9305 8.52083 14.7917ZM3.79167 18.4583C3.41667 18.4583 3.08681 18.316 2.80208 18.0312C2.51736 17.7465 2.375 17.4167 2.375 17.0417V4.20832C2.375 3.81943 2.51736 3.4861 2.80208 3.20832C3.08681 2.93055 3.41667 2.79166 3.79167 2.79166H5.10417V2.24999C5.10417 2.05555 5.17361 1.88888 5.3125 1.74999C5.45139 1.6111 5.61806 1.54166 5.8125 1.54166C6.02083 1.54166 6.19444 1.6111 6.33333 1.74999C6.47222 1.88888 6.54167 2.05555 6.54167 2.24999V2.79166H13.4583V2.24999C13.4583 2.05555 13.5278 1.88888 13.6667 1.74999C13.8056 1.6111 13.9722 1.54166 14.1667 1.54166C14.375 1.54166 14.5486 1.6111 14.6875 1.74999C14.8264 1.88888 14.8958 2.05555 14.8958 2.24999V2.79166H16.2083C16.5972 2.79166 16.9306 2.93055 17.2083 3.20832C17.4861 3.4861 17.625 3.81943 17.625 4.20832V17.0417C17.625 17.4167 17.4861 17.7465 17.2083 18.0312C16.9306 18.316 16.5972 18.4583 16.2083 18.4583H3.79167ZM3.79167 17.0417H16.2083V8.12499H3.79167V17.0417ZM3.79167 6.87499H16.2083V4.20832H3.79167V6.87499ZM3.79167 6.87499V4.20832V6.87499Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a  href="{{ route('service.index') }}">
                            <div class="card total-service-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                                                <h4 class="mb-2 booking-text font-weight-bold">{{ !empty($data['dashboard']['count_total_service']) ? $data['dashboard']['count_total_service'] : 0 }}</h4>
                                            </div>
                                            <p class="mb-0 booking-text">{{ __('messages.total_name', ['name' => __('messages.services')]) }}</p>
                                        </div>
                                        <div class="col-auto d-flex flex-column">
                                            <div class="iq-card-icon iq-card-icon-service icon-shape  text-white rounded-circle shadow">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.89575 17.0833C9.9652 17.0833 10.0451 17.066 10.1353 17.0312C10.2256 16.9965 10.2985 16.9514 10.3541 16.8958L17.3541 9.875C17.5346 9.68056 17.6735 9.46181 17.7708 9.21875C17.868 8.97569 17.9166 8.72917 17.9166 8.47917C17.9166 8.22917 17.868 7.97917 17.7708 7.72917C17.6735 7.47917 17.5346 7.25694 17.3541 7.0625L13.7499 3.45833C13.5555 3.27778 13.3402 3.14236 13.1041 3.05208C12.868 2.96181 12.6249 2.91667 12.3749 2.91667C12.1388 2.91667 11.9027 2.96181 11.6666 3.05208C11.4305 3.14236 11.2221 3.27083 11.0416 3.4375L10.7083 3.79167L12.3749 5.45833C12.5555 5.66667 12.7221 5.90625 12.8749 6.17708C13.0277 6.44792 13.1041 6.75 13.1041 7.08333C13.1041 7.63889 12.8853 8.12847 12.4478 8.55208C12.0103 8.97569 11.5138 9.1875 10.9583 9.1875C10.5971 9.1875 10.2951 9.13194 10.052 9.02083C9.80895 8.90972 9.58325 8.75 9.37492 8.54167L7.85408 7.04167L4.16659 10.7083C4.09714 10.7778 4.04853 10.8507 4.02075 10.9271C3.99297 11.0035 3.97909 11.0903 3.97909 11.1875C3.97909 11.3542 4.03811 11.4965 4.15617 11.6146C4.27422 11.7326 4.42353 11.7917 4.60409 11.7917C4.68742 11.7917 4.76728 11.7708 4.84367 11.7292C4.92006 11.6875 4.98603 11.6389 5.04159 11.5833L7.87492 8.75L8.74992 9.625L5.93742 12.4375C5.86797 12.5069 5.81936 12.5833 5.79158 12.6667C5.76381 12.75 5.74992 12.8333 5.74992 12.9167C5.74992 13.0833 5.81242 13.2292 5.93742 13.3542C6.06242 13.4792 6.20825 13.5417 6.37492 13.5417C6.45825 13.5417 6.53811 13.5243 6.6145 13.4896C6.69089 13.4549 6.75686 13.4097 6.81242 13.3542L9.64575 10.5417L10.5208 11.4167L7.70825 14.2083C7.6527 14.2639 7.60756 14.3368 7.57283 14.4271C7.53811 14.5174 7.52075 14.6042 7.52075 14.6875C7.52075 14.8542 7.58325 15 7.70825 15.125C7.83325 15.25 7.97908 15.3125 8.14575 15.3125C8.22908 15.3125 8.30547 15.2986 8.37492 15.2708C8.44436 15.2431 8.51381 15.1944 8.58325 15.125L11.3958 12.2917L12.2708 13.1667L9.45825 16C9.38881 16.0694 9.3402 16.1458 9.31242 16.2292C9.28464 16.3125 9.27075 16.3889 9.27075 16.4583C9.27075 16.6528 9.32631 16.8056 9.43742 16.9167C9.54853 17.0278 9.70131 17.0833 9.89575 17.0833ZM9.89575 18.4583C9.42353 18.4583 8.99645 18.2847 8.6145 17.9375C8.23256 17.5903 7.99992 17.1597 7.91658 16.6458C7.45825 16.5764 7.06936 16.3819 6.74992 16.0625C6.43047 15.7431 6.22909 15.3542 6.14575 14.8958C5.68742 14.8125 5.302 14.6076 4.9895 14.2812C4.677 13.9549 4.48603 13.5694 4.41659 13.125C3.88881 13.0417 3.45825 12.816 3.12492 12.4479C2.79159 12.0799 2.62492 11.6458 2.62492 11.1458C2.62492 10.8958 2.67353 10.6458 2.77075 10.3958C2.86797 10.1458 3.00686 9.93056 3.18742 9.75L7.85408 5.08333L10.2291 7.4375C10.3402 7.54861 10.4617 7.63542 10.5937 7.69792C10.7256 7.76042 10.8541 7.79167 10.9791 7.79167C11.1596 7.79167 11.3298 7.71181 11.4895 7.55208C11.6492 7.39236 11.7291 7.22222 11.7291 7.04167C11.7291 6.95833 11.7013 6.86458 11.6458 6.76042C11.5902 6.65625 11.5138 6.54861 11.4166 6.4375L8.41658 3.45833C8.23603 3.27778 8.02422 3.14236 7.78117 3.05208C7.53811 2.96181 7.29158 2.91667 7.04158 2.91667C6.79158 2.91667 6.552 2.96181 6.32284 3.05208C6.09367 3.14236 5.88881 3.27083 5.70825 3.4375L2.60409 6.5625C2.40964 6.74306 2.2777 6.94444 2.20825 7.16667C2.13881 7.38889 2.09714 7.63889 2.08325 7.91667C2.06936 8.16667 2.12145 8.41319 2.2395 8.65625C2.35756 8.89931 2.49297 9.125 2.64575 9.33333L1.66659 10.2917C1.38881 10.0139 1.16311 9.65625 0.989502 9.21875C0.815891 8.78125 0.722141 8.33333 0.708252 7.875C0.708252 7.43056 0.788113 7.01389 0.947835 6.625C1.10756 6.23611 1.3402 5.88889 1.64575 5.58333L4.72909 2.47917C5.04853 2.17361 5.41311 1.94444 5.82284 1.79167C6.23256 1.63889 6.64575 1.5625 7.06242 1.5625C7.49297 1.5625 7.90964 1.63889 8.31242 1.79167C8.7152 1.94444 9.06936 2.17361 9.37492 2.47917L9.72908 2.8125L10.0624 2.47917C10.368 2.17361 10.7256 1.94444 11.1353 1.79167C11.5451 1.63889 11.9652 1.5625 12.3958 1.5625C12.8263 1.5625 13.243 1.64236 13.6458 1.80208C14.0485 1.96181 14.4027 2.19444 14.7083 2.5L18.3333 6.125C18.6527 6.44444 18.8923 6.8125 19.052 7.22917C19.2117 7.64583 19.2916 8.0625 19.2916 8.47917C19.2916 8.90972 19.2083 9.33333 19.0416 9.75C18.8749 10.1667 18.6319 10.5347 18.3124 10.8542L11.3124 17.8542C11.118 18.0486 10.8992 18.1979 10.6562 18.3021C10.4131 18.4062 10.1596 18.4583 9.89575 18.4583Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a  href="{{ route('provider.index') }}">
                            <div class="card total-provider-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                                                <h4 class="mb-2 booking-text font-weight-bold">{{ !empty($data['dashboard']['count_total_provider']) ? $data['dashboard']['count_total_provider'] : 0 }}</h4>
                                                <p class="mb-0 ml-3 text-danger font-weight-bold"></p>
                                            </div>
                                            <p class="mb-0 booking-text">{{ __('messages.total_name', ['name' => __('messages.providers')]) }}</p>
                                        </div>
                                        <div class="col-auto d-flex flex-column">
                                            <div class="iq-card-icon iq-card-icon-provider icon-shape  text-white rounded-circle shadow">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.666748 16.8542V14.7708C0.666748 14.2569 0.798692 13.7917 1.06258 13.375C1.32647 12.9583 1.69453 12.6458 2.16675 12.4375C3.18064 11.993 4.10078 11.6736 4.92716 11.4792C5.75355 11.2847 6.5973 11.1875 7.45841 11.1875C8.3473 11.1875 9.198 11.2847 10.0105 11.4792C10.823 11.6736 11.7362 11.993 12.7501 12.4375C13.2223 12.6458 13.5938 12.9583 13.8647 13.375C14.1355 13.7917 14.2709 14.2569 14.2709 14.7708V16.8542H0.666748ZM15.5626 16.8542V14.7708C15.5626 13.8958 15.3438 13.1701 14.9063 12.5937C14.4688 12.0174 13.882 11.5347 13.1459 11.1458C14.0765 11.2569 14.9549 11.4201 15.7813 11.6354C16.6077 11.8507 17.2848 12.0903 17.8126 12.3542C18.2709 12.618 18.639 12.9583 18.9167 13.375C19.1945 13.7917 19.3334 14.2639 19.3334 14.7917V16.8542H15.5626ZM7.47925 9.91666C6.5348 9.91666 5.76744 9.61805 5.17716 9.02082C4.58689 8.4236 4.29175 7.65971 4.29175 6.72916C4.29175 5.78471 4.58689 5.01735 5.17716 4.42707C5.76744 3.8368 6.52786 3.54166 7.45841 3.54166C8.40286 3.54166 9.17369 3.8368 9.77091 4.42707C10.3681 5.01735 10.6667 5.78471 10.6667 6.72916C10.6667 7.65971 10.3681 8.4236 9.77091 9.02082C9.17369 9.61805 8.4098 9.91666 7.47925 9.91666V9.91666ZM15.1459 6.72916C15.1459 7.65971 14.8508 8.4236 14.2605 9.02082C13.6702 9.61805 12.9029 9.91666 11.9584 9.91666C11.8056 9.91666 11.6355 9.90624 11.448 9.88541C11.2605 9.86457 11.0904 9.81943 10.9376 9.74999C11.2709 9.40277 11.5244 8.97221 11.698 8.45832C11.8716 7.94443 11.9584 7.36805 11.9584 6.72916C11.9584 6.09027 11.8716 5.52777 11.698 5.04166C11.5244 4.55555 11.2709 4.10416 10.9376 3.68749C11.0904 3.64582 11.2605 3.6111 11.448 3.58332C11.6355 3.55555 11.8056 3.54166 11.9584 3.54166C12.9029 3.54166 13.6702 3.84027 14.2605 4.43749C14.8508 5.03471 15.1459 5.7986 15.1459 6.72916V6.72916ZM2.10425 15.4375H12.8334V14.7917C12.8334 14.5694 12.7674 14.3542 12.6355 14.1458C12.5036 13.9375 12.3404 13.7917 12.1459 13.7083C11.1598 13.2778 10.3334 12.9861 9.66675 12.8333C9.00008 12.6805 8.26397 12.6042 7.45841 12.6042C6.68064 12.6042 5.948 12.6805 5.2605 12.8333C4.573 12.9861 3.74314 13.2778 2.77091 13.7083C2.57647 13.7917 2.41675 13.9375 2.29175 14.1458C2.16675 14.3542 2.10425 14.5694 2.10425 14.7917V15.4375ZM7.45841 8.54166C7.98619 8.54166 8.42369 8.37152 8.77091 8.03124C9.11814 7.69096 9.29175 7.25693 9.29175 6.72916C9.29175 6.20138 9.12161 5.76388 8.78133 5.41666C8.44105 5.06943 8.00703 4.89582 7.47925 4.89582C6.95147 4.89582 6.51397 5.06943 6.16675 5.41666C5.81953 5.76388 5.64591 6.20138 5.64591 6.72916C5.64591 7.25693 5.81953 7.69096 6.16675 8.03124C6.51397 8.37152 6.94453 8.54166 7.45841 8.54166V8.54166Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a  href="{{ route('payment.index') }}">
                            <div class="card total-revenue">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                                                <h4 class="mb-2 booking-text font-weight-bold">{{ getPriceFormat(round($data['total_revenue'])) }}</h4>
                                                <p class="mb-0 ml-3 text-danger font-weight-bold"></p>
                                            </div>
                                            <p class="mb-0 booking-text">{{ __('messages.total_name', ['name' => __('messages.revenue')]) }}</p>
                                        </div>
                                        <div class="col-auto d-flex flex-column">
                                            <div class="iq-card-icon iq-card-icon-revenue icon-shape text-white rounded-circle shadow">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.37508 15.9792H10.5626V14.9167C11.4098 14.8194 12.0695 14.559 12.5417 14.1354C13.014 13.7118 13.2501 13.1389 13.2501 12.4167C13.2501 11.7083 13.0487 11.1285 12.6459 10.6771C12.2431 10.2257 11.5556 9.7986 10.5834 9.39582C9.79175 9.06249 9.21536 8.76388 8.85425 8.49999C8.49314 8.2361 8.31258 7.88193 8.31258 7.43749C8.31258 7.02082 8.46536 6.69096 8.77091 6.44791C9.07647 6.20485 9.49314 6.08332 10.0209 6.08332C10.4376 6.08332 10.7987 6.18055 11.1042 6.37499C11.4098 6.56943 11.6667 6.86805 11.8751 7.27082L12.9376 6.77082C12.6876 6.25693 12.3716 5.8611 11.9897 5.58332C11.6077 5.30555 11.1459 5.13888 10.6042 5.08332V4.04166H9.41675V5.08332C8.69453 5.18055 8.13203 5.44443 7.72925 5.87499C7.32647 6.30555 7.12508 6.83332 7.12508 7.45832C7.12508 8.15277 7.33689 8.70485 7.7605 9.11457C8.18411 9.52429 8.82647 9.90277 9.68758 10.25C10.5904 10.625 11.2119 10.9687 11.5522 11.2812C11.8924 11.5937 12.0626 11.9722 12.0626 12.4167C12.0626 12.8611 11.882 13.2153 11.5209 13.4792C11.1598 13.743 10.7015 13.875 10.1459 13.875C9.60425 13.875 9.12508 13.7222 8.70841 13.4167C8.29175 13.1111 8.00008 12.6875 7.83341 12.1458L6.70842 12.5208C7.00008 13.1736 7.36467 13.6875 7.80217 14.0625C8.23966 14.4375 8.76397 14.7083 9.37508 14.875V15.9792ZM10.0001 18.4583C8.8473 18.4583 7.75355 18.2361 6.71883 17.7917C5.68411 17.3472 4.7848 16.743 4.02091 15.9792C3.25703 15.2153 2.65286 14.3194 2.20841 13.2917C1.76397 12.2639 1.54175 11.1667 1.54175 9.99999C1.54175 8.83332 1.76397 7.73263 2.20841 6.69791C2.65286 5.66318 3.25703 4.76735 4.02091 4.01041C4.7848 3.25346 5.68064 2.65277 6.70842 2.20832C7.73619 1.76388 8.83341 1.54166 10.0001 1.54166C11.1667 1.54166 12.2674 1.76388 13.3022 2.20832C14.3369 2.65277 15.2327 3.25346 15.9897 4.01041C16.7466 4.76735 17.3473 5.65971 17.7917 6.68749C18.2362 7.71527 18.4584 8.81943 18.4584 9.99999C18.4584 11.1667 18.2362 12.2639 17.7917 13.2917C17.3473 14.3194 16.7466 15.2153 15.9897 15.9792C15.2327 16.743 14.3404 17.3472 13.3126 17.7917C12.2848 18.2361 11.1806 18.4583 10.0001 18.4583ZM10.0001 17.0417C11.9584 17.0417 13.6216 16.3542 14.9897 14.9792C16.3577 13.6042 17.0417 11.9444 17.0417 9.99999C17.0417 8.04166 16.3577 6.37846 14.9897 5.01041C13.6216 3.64235 11.9584 2.95832 10.0001 2.95832C8.05564 2.95832 6.39591 3.64235 5.02091 5.01041C3.64591 6.37846 2.95841 8.04166 2.95841 9.99999C2.95841 11.9444 3.64591 13.6042 5.02091 14.9792C6.39591 16.3542 8.05564 17.0417 10.0001 17.0417Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h4 class="">{{__('messages.monthly_revenue')}}</h4>
                        </div>
                        <div id="monthly-revenue" class="custom-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card top-providers">
                    <div class="card-header d-flex justify-content-between gap-10">
                        <h4 class="font-weight-bold">{{ __('messages.recent_provider') }}</h4>
                            <a href="{{ route('provider.index') }}" class="btn-link btn-link-hover"><u>{{__('messages.view_all')}} </u></a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="common-list list-unstyled">
                            @foreach($data['dashboard']['new_provider'] as $provider)
                            <li style="pointer-events:none;">
                                <div class="media gap-3">
                                    <div class="h-avatar is-medium h-5">
                                        <img class="avatar-50 rounded-circle bg-light" alt="user-icon" src="{{ getSingleMedia($provider,'profile_image', null) }}">
                                    </div>
                                    
                                    <div class="media-body ">
                                        <h5><span class="font-weight-bold">{{!empty($provider->display_name) ? $provider->display_name : '-'}}</span> </h5>
                                            <span class="common-list_rating d-flex gap-1">
                                                <i class="ri-star-s-fill"></i>
                                                {{round($provider->getServiceRating->avg('rating'), 1)}}
                                            </span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card top-providers">
                    <div class="card-header d-flex justify-content-between gap-10">
                        <h4 class="font-weight-bold">{{ __('messages.recent_customer') }}</h4>
                        <a href="{{ route('user.index') }}" class="btn-link btn-link-hover"><u>{{__('messages.view_all')}}</u></a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="common-list list-unstyled">
                            @foreach($data['dashboard']['new_customer'] as $customer) 
                            <li style="pointer-events:none;">
                                <div class="media gap-3">
                                    <div class="h-avatar is-medium h-5">
                                        <img class="avatar-50 rounded-circle bg-light" alt="user-icon" src="{{ getSingleMedia($customer,'profile_image', null) }}">
                                    </div>
                                    <div class="media-body ">
                                        <h5><span class="font-weight-bold">{{!empty($customer->display_name) ? $customer->display_name : '-'}}</span>  </h5>
                                        <span>{{($customer->created_at)}}</span>
                                            
                                    </div>
                                </div>
                            </li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card recent-activities">
                    <div class="card-header d-flex justify-content-between gap-10">
                        <h4>{{__('messages.recent_booking')}}</h4>
                        <a href="{{ route('booking.index') }}" class="btn-link btn-link-hover"><u>{{__('messages.view_all')}}</u></a>
                    </div>
                        <div class="card-body">
                            <ul class="common-list p-0">
                                
                                @foreach($data['dashboard']['upcomming_booking'] as $booking)
                                    <li class="d-flex flex-wrap gap-2 align-items-start align-items-lg-center justify-content-between flex-column flex-lg-row "  style="pointer-events:none;">
                                        <div class="media align-items-center gap-3">
                                                <div class="h-avatar is-medium h-5">
                                                    <img class="avatar-50 rounded-circle bg-light" alt="user-icon" src="{{ getSingleMedia($booking->customer,'profile_image', null) }}">
                                                </div>
                                                <div class="media-body ">
                                                    <h5>#{{$booking->id}}</h5>
                                                        
                                                    <span>{{($booking->date)}}</span>
                                                </div>
                                        </div>
                                        <span class="badge rounded-pill py-2 px-3 badge-pending text-capitalize">{{$booking->status}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
<script>
    var chartData = '<?php echo $data['category_chart']['chartdata']; ?>';
    var chartArray = JSON.parse(chartData);
    var chartlabel = '<?php echo $data['category_chart']['chartlabel']; ?>';
    var labelsArray = JSON.parse(chartlabel);
    if(jQuery('#monthly-revenue').length){
        var options = {
        series: [{
            name: 'revenue',
            data: [ {{ implode ( ',' ,$data['revenueData'] ) }} ]
            // data: [30, 39, 20, 28, 36, 33,20]
        }],
        chart: {
          height: 265,
          type: 'line',
          toolbar:{
            show: true,
          },
          events: {
            click: function(chart, w, e) {
            }
          }
        },        
        plotOptions: {
            bar: {
                horizontal: false,
                s̶t̶a̶r̶t̶i̶n̶g̶S̶h̶a̶p̶e̶: 'flat',
                e̶n̶d̶i̶n̶g̶S̶h̶a̶p̶e̶: 'flat',
                borderRadius: 0,
                columnWidth: '70%',
                barHeight: '70%',
                distributed: false,
                rangeBarOverlap: true,
                rangeBarGroupRows: false,
                colors: {
                    ranges: [{
                        from: 0,
                        to: 0,
                        color: undefined
                    }],
                    backgroundBarColors: [],
                    backgroundBarOpacity: 1,
                    backgroundBarRadius: 0,
                },
                dataLabels: {
                    position: 'top',
                    maxItems: 100,
                    hideOverflowingLabels: true,
                }
            }
        },
        dataLabels: {
          enabled: false
        },
        grid: {
          xaxis: {
              lines: {
                  show: false
              }
          },
          yaxis: {
              inles: {
                  show: true
              }
          }
        },
        legend: {
          show: false
        },
        yaxis: {
          labels: {
          offsetY:0,
          minWidth: 20,
          maxWidth: 20
          },
        },
        xaxis: {
          categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'June', 
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
          ],
          labels: {
            minHeight: 22,
            maxHeight: 22,
            style: {              
              fontSize: '12px'
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#monthly-revenue"), options);
        chart.render();
    }

</script>