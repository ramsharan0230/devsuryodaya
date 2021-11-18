<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Setting\SettingRepository;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
    
class SiteSettingController extends Controller
{

    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
        $this->model = $setting;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $detail = $this->model->first();
        $seo_siteSettings = DB::table('seo_site_settings')->first();
        return view('admin.site-settings.index', compact('detail', 'seo_siteSettings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldRecord = $this->model->find((int) $id);
        $oldSeoRecord = DB::table('seo_site_settings')->where('id', (int) $id)->first();

        $request->validate($this->rules(), $this->messages());

        $formData = $request->except(['logo', 'logo_left', 'logo_right']);

        if ($request->hasFile('logo')) {
            if ($oldRecord->logo) {
                $this->unlinkImage($oldRecord->logo);
            }
            $logo = $request->file('logo');
            $imageName = Date("D-h-i-s") . '-' . rand() . '.logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/main'), $imageName);
            $formData['logo'] = $imageName;
        }


        if ($request->hasFile('logo_left')) {
            if ($oldRecord->logo_left) {
                $this->unlinkImage($oldRecord->logo_left);
            }
            $logo = $request->file('logo_left');
            $imageName = Date("D-h-i-s") . '-' . rand() . '.logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/main'), $imageName);
            $formData['logo_left'] = $imageName;
        }

        if ($request->hasFile('logo_right')) {
            if ($oldRecord->logo_right) {
                $this->unlinkImage($oldRecord->logo_right);
            }
            $logo = $request->file('logo_right');
            $imageName = Date("D-h-i-s") . '-' . rand() . '.logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/main'), $imageName);
            $formData['logo_right'] = $imageName;
        }


        $oldRecord->update($formData);
        $updateSeo = DB::table('seo_site_settings')->where('id', $id)->update([
            'meta_title'=>$request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_phrase' => $request->meta_phrase,
            'keyword'=> $request->keyword,
            'publish'=> 1
        ]);

        return redirect()->route('admin.site-setting')->with('message', 'Setting updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function imageProcessing($image, $width, $height, $otherpath)
    {

        $input['imagename'] = Date("D-h-i-s") . '-' . rand() . '.' . $image->getClientOriginalExtension();
        $thumbPath = public_path('images/thumbnail');
        $mainPath = public_path('images/main');
        $listingPath = public_path('images/listing');

        $img = Image::make($image->getRealPath());
        $img->fit($width, $height)->save($mainPath . '/' . $input['imagename']);

        // with no fit
        // $img->save($mainPath . '/' . $input['imagename']);

        if ($otherpath == 'yes') {
            $img->fit($width / 2, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($listingPath . '/' . $input['imagename']);

            $img->fit(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath . '/' . $input['imagename']);
        }

        $img->destroy();
        return $input['imagename'];
    }

    public function unlinkImage($imagename)
    {
        $thumbPath = public_path('images/thumbnail/') . $imagename;
        $mainPath = public_path('images/main/') . $imagename;
        $listingPath = public_path('images/listing/') . $imagename;

        if (file_exists($thumbPath)) {
            unlink($thumbPath);
        }

        if (file_exists($mainPath)) {
            unlink($mainPath);
        }

        if (file_exists($listingPath)) {
            unlink($listingPath);
        }

        return;
    }

    public function rules()
    {
        $rules = [
            'site_name' => 'required',
            'meta_title'=> 'required|max:199'
            // 'contactus_image' => 'dimensions:max_width=2000,max_height=2000|mimes:jpg,jpeg,png,gif|max:3048',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            // 'contactus_image.dimensions' => 'Upto 2000 * 2000 size is allowed',
        ];
    }
}
