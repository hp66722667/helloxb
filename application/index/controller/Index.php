<?php
namespace app\index\controller;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Index extends Controller
{
    public function index()
    {
        $bucket = 'litwhite';
        $accessKey = 'n7gzSmxbVb3kJGF_W4E1g7frzo5z8S_bi2PrCp_q';
        $secretKey = 'WOQSbsf1wrpZIh6-W3rL9jOaqExpcD4sZ_Srdg3i';
        $auth = new Auth($accessKey, $secretKey);
        $upToken = $auth->uploadToken($bucket);
        $this->assign([
            'uptoken'=>$upToken,
        ]);
        return $this->fetch();
    }
}
