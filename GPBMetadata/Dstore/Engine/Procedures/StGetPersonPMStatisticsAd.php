<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPersonPMStatistics_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class StGetPersonPMStatisticsAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af20d0a3a6473746f72652f656e67696e652f70726f636564757265732f" .
            "73745f476574506572736f6e504d537461746973746963735f41642e7072" .
            "6f746f12296473746f72652e656e67696e652e73745f476574506572736f" .
            "6e504d537461746973746963735f41641a136473746f72652f76616c7565" .
            "732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e652e" .
            "70726f746f22d8050a0a506172616d6574657273122e0a0a706572736f6e" .
            "5f69647318012001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c756512180a0f706572736f6e5f6964735f6e756c6c18e907" .
            "20012808122f0a0a66726f6d5f6d6f6e746818022001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c756512180a0f66726f" .
            "6d5f6d6f6e74685f6e756c6c18ea0720012808122e0a0966726f6d5f7965" .
            "617218032001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c756512170a0e66726f6d5f796561725f6e756c6c18eb072001" .
            "2808122d0a08746f5f6d6f6e746818042001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c756512160a0d746f5f6d6f6e74" .
            "685f6e756c6c18ec0720012808122c0a07746f5f7965617218052001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "150a0c746f5f796561725f6e756c6c18ed072001280812400a1c62617369" .
            "635f63686172616374657269737469635f6e756d6265727318062001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c7565122a" .
            "0a2162617369635f63686172616374657269737469635f6e756d62657273" .
            "5f6e756c6c18ee072001280812330a0f685f747265655f6e6f64655f6964" .
            "7318072001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c7565121d0a14685f747265655f6e6f64655f6964735f6e756c6c18" .
            "ef072001280812350a1073756d6d6172697a655f6d6f6e74687318082001" .
            "280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c75" .
            "65121e0a1573756d6d6172697a655f6d6f6e7468735f6e756c6c18f00720" .
            "012808122e0a096765745f746f705f7818092001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512170a0e6765745f74" .
            "6f705f785f6e756c6c18f107200128082296060a08526573706f6e736512" .
            "380a106d6574615f696e666f726d6174696f6e18022003280b321e2e6473" .
            "746f72652e656e67696e652e4d657461496e666f726d6174696f6e12270a" .
            "076d65737361676518032003280b32162e6473746f72652e656e67696e65" .
            "2e4d65737361676512440a03726f7718042003280b32372e6473746f7265" .
            "2e656e67696e652e73745f476574506572736f6e504d5374617469737469" .
            "63735f41642e526573706f6e73652e526f771ae0040a03526f77120f0a06" .
            "726f775f696418904e2001280512410a1c76616c7565315f726573747269" .
            "637465645f62795f7061747465726e18914e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565122b0a056d6f6e746818" .
            "924e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c756512410a1c76616c7565325f726573747269637465645f62795f" .
            "7061747465726e18934e2001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512310a0b746f74616c5f76616c756518944e" .
            "2001280b321b2e6473746f72652e76616c7565732e446563696d616c5661" .
            "6c7565122a0a047965617218954e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565122f0a09706572736f6e5f6964" .
            "18964e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512340a0e685f747265655f6e6f64655f696418974e200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "122b0a0676616c75653118984e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565122b0a0676616c75653218994e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "12320a0c6469726563745f76616c7565189a4e2001280b321b2e6473746f" .
            "72652e76616c7565732e446563696d616c56616c756512410a1b62617369" .
            "635f63686172616374657269737469635f6e756d626572189b4e2001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756542" .
            "5c0a1b696f2e6473746f72652e656e67696e652e70726f63656475726573" .
            "5a3d676f73646b2e6473746f72652e64652f656e67696e652f70726f6365" .
            "64757265732f73745f476574506572736f6e504d53746174697374696373" .
            "5f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
