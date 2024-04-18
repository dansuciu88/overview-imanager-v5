<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function AllServiceType()
    {
        $types = ServiceType::latest()->get();
        return view('admin.services.all_service_type',compact('types'));
    } // End Method

    public function AddServiceType()
    {
        return view('admin.services.add_service_type');
    } // End Method

    public function StoreServiceType(Request $request)
    {
        //validation
        $request->validate([
            'service_name' => 'required|unique:service_types|max:200', // required and unique in property_types table from DB, max 200 char
            'service_unit' => 'required',
        ]);

        ServiceType::insert([
            'service_name' => $request->service_name,
            'service_unit' => $request->service_unit,
        ]);

        $notification = array(
            'message' => 'Property Type Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.service-type')->with($notification);

    } // End Method

    public function EditServiceType($id)
    {
        $types = ServiceType::findOrFail($id);
        return view('admin.services.edit_service_type', compact('types'));
    } // End Method

    public function UpdateServiceType(Request $request)
    {
        $propertyId = $request->id;

        ServiceType::findOrFail($propertyId)->update([
            'service_name' => $request->service_name,
            'service_unit' => $request->service_unit,
        ]);

        $notification = array(
            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.service-type')->with($notification);

    } // End Method

    public function DeleteServiceType($id)
    {
        ServiceType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method


    // CLIENTS CONTROLLER METHODS
    public function AllClients()
    {
        $clients = Client::latest()->get();
        return view('admin.clients.all_clients',compact('clients'));
    } // End Method

    public function AddClients()
    {
        return view('admin.clients.add_clients');
    } // End Method

    public function StoreClients(Request $request)
    {
        //validation
        $request->validate([
            'client_name' => 'required|unique:clients|max:200', // required and unique in clients table from DB, max 200 char
            'client_telephone' => 'required',
            'client_email' => 'required',
            'client_address' => 'required',
            'client_pj_name', // astea trebuie sa fie cu required ??!
            'client_pj_cui',
            'client_pj_j',
            'client_pj_bank',
            'client_pj_iban',
        ]);

        Client::insert([
            'client_name' => $request->client_name,
            'client_telephone' => $request->client_telephone,
            'client_email' => $request->client_email,
            'client_address' => $request->client_address,
            'client_pj_name' => $request->client_pj_name,
            'client_pj_cui' => $request->client_pj_cui,
            'client_pj_j' => $request->client_pj_j,
            'client_pj_bank' => $request->client_pj_bank,
            'client_pj_iban' => $request->client_pj_iban,
        ]);

        $notification = array(
            'message' => 'Client Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);

    } // End Method

    // PROJECTS CONTROLLER METHODS

    public function AllProjects()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.all_projects',compact('projects'));
    } // End Method

    public function AddProjects()
    {
        return view('admin.projects.add_projects');
    } // End Method

    public function StoreProjects(Request $request)
    {
        //validation
        $request->validate([
            'project_name' => 'required|unique:projects|max:200', // required and unique in clients table from DB, max 200 char
            'project_address' => 'required',
            'project_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'project_status' => 'required',
            'project_number',
            'project_budget',
            'project_client',
        ]);

        Project::insert([
            'project_name' => $request->project_name,
            'project_address' => $request->project_address,
            'project_description' => $request->project_description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'project_status' => $request->project_status,
            'project_number' => $request->project_number,
            'project_budget' => $request->project_budget,
            'project_client' => $request->project_client,
        ]);

        $notification = array(
            'message' => 'Project Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.projects')->with($notification);

    } // End Method

    // INVOICES CONTROLLER METHODS

    public function AllInvoices()
    {
        $invoices = Project::latest()->get();
        return view('admin.invoice.all_invoices',compact('invoices'));
    } // End Method

}
