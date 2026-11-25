@extends('layouts.app')

@section('title', 'Account settings - Pages')

@push('styles')
<link rel="stylesheet" href="{{ asset('sneat/vendor/libs/select2/select2.css') }}"" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="nav-align-top">
        <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-account.html"><i class="icon-base icon-18px bx bx-user me-1_5"></i> Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-security.html"><i class="icon-base icon-18px bx bx-lock-alt me-1_5"></i> Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-billing.html"><i class="icon-base icon-18px bx bx-detail me-1_5"></i> Billing & Plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="icon-base icon-18px bx bx-bell me-1_5"></i> Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-connections.html"><i class="icon-base icon-18px bx bx-link-alt me-1_5"></i> Connections</a>
          </li>
        </ul>
      </div>
      <div class="card">
        <!-- Notifications -->
        <div class="card-body">
          <h5 class="mb-1">Recent Devices</h5>
          <span class="card-subtitle"
            >We need permission from your browser to show notifications. <span class="notificationRequest"><a href="javascript:void(0);" class="text-primary">Request Permission</a></span></span
          >
          <div class="error"></div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th class="text-nowrap">Type</th>
                <th class="text-nowrap text-center">Email</th>
                <th class="text-nowrap text-center">Browser</th>
                <th class="text-nowrap text-center">App</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap text-heading">New for you</td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-nowrap text-heading">Account activity</td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-nowrap text-heading">A new browser used to sign in</td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-nowrap text-heading">A new device is linked</td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                  </div>
                </td>
                <td>
                  <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-body">
          <h6 class="text-body mb-6">When should we send you notifications?</h6>
          <form action="javascript:void(0);">
            <div class="row">
              <div class="col-sm-6">
                <select id="sendNotification" class="form-select" name="sendNotification">
                  <option selected>Only when I'm online</option>
                  <option>Anytime</option>
                </select>
              </div>
              <div class="mt-6">
                <button type="submit" class="btn btn-primary me-3">Save changes</button>
                <button type="reset" class="btn btn-label-secondary">Discard</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /Notifications -->
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="{{ asset('sneat/vendor/libs/select2/select2.js') }}"></script>
<script src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"></script>
@endpush
