<div>
    <div class="tab-content" id="myPackageTabContent">
        <div class="tab-pane fade show active" id="packagePoverview" role="tabpanel">
            <div class="card mb-5 mb-xl-10">
                <div>
                    <div class="card-body  border-top p-9">
                        <div class="row mb-7">
                            <div class="col-lg-3 d-flex flex-column mb-md-10 mb-5">
                                <label
                                    class="pb-2 fs-5 text-gray-600">{{ __('messages.package.package').(':')  }}</label>
                                <span class="fs-5 text-gray-800">{{ $package->name }}</span>
                            </div>
                            <div class="col-lg-3 d-flex flex-column mb-md-10 mb-5">
                                <label
                                    class="pb-2 fs-5 text-gray-600">{{ __('messages.package.discount').(':')  }}</label>
                                <span class="fs-5 text-gray-800">{{$package->discount }}%</span>
                            </div>
                            <div class="col-lg-3 d-flex flex-column mb-md-10 mb-5">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.common.created_on').(':')  }}</label>
                                <span class="fs-5 text-gray-800" data-bs-toggle="tooltip" data-placement="top"  data-bs-original-title="{{ date('jS M, Y', strtotime($package->created_at)) }}">{{ $package->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="col-lg-3 d-flex flex-column mb-md-10 mb-5">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.common.last_updated').(':')  }}</label>
                                <span class="fs-5 text-gray-800" data-placement="top"  data-bs-original-title="{{ date('jS M, Y', strtotime($package->updated_at)) }}">{{ $package->updated_at->diffForHumans() }}</span>
                            </div>
                            <div class="col-lg-3 d-flex flex-column">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.common.description').(':')  }}</label>
                                <span class="fs-5 text-gray-800">{!! !empty($package->description)? nl2br(e($package->description)):'N/A'  !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="fs-5 m-0">{{ __('messages.services') }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="viewList">
                    <table id="packageAccountPayments"
                           class="table table-striped">
                        <thead>
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="text-center">#</th>
                            <th>{{ __('messages.package.service') }}</th>
                            <th class="text-right">{{ __('messages.package.qty') }}</th>
                            <th class="text-right">{{ __('messages.package.rate') }}</th>
                            <th class="text-right">{{ __('messages.package.amount') }}</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold">
                        @forelse($package->packageServicesItems as $index => $packageServiceItem)
                            <tr>
                                <td class="text-center w-5">{{ $index + 1 }}</td>
                                <td>
                                    {{ $packageServiceItem->service->name }}
                                </td>
                                <td class="table__qty text-right">
                                    {{ $packageServiceItem->quantity }}
                                </td>
                                <td class="text-right">
                                    <b>{{ getCurrencySymbol() }}</b> {{ number_format($packageServiceItem->rate) }}
                                </td>
                                <td class="text-right"><b>{{ getCurrencySymbol() }}</b> {{ number_format($packageServiceItem->amount) }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="5">{{__('messages.common.no_data_available')}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
