<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPersonPDStatistics_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class StGetPersonPDStatisticsAd
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
            "0ab40c0a3a6473746f72652f656e67696e652f70726f636564757265732f" .
            "73745f476574506572736f6e5044537461746973746963735f41642e7072" .
            "6f746f12296473746f72652e656e67696e652e73745f476574506572736f" .
            "6e5044537461746973746963735f41641a136473746f72652f76616c7565" .
            "732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e652e" .
            "70726f746f22c6040a0a506172616d6574657273122e0a0a706572736f6e" .
            "5f69647318012001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c756512180a0f706572736f6e5f6964735f6e756c6c18e907" .
            "2001280812300a0966726f6d5f6461746518022001280b321d2e6473746f" .
            "72652e76616c7565732e54696d657374616d7056616c756512170a0e6672" .
            "6f6d5f646174655f6e756c6c18ea0720012808122e0a07746f5f64617465" .
            "18032001280b321d2e6473746f72652e76616c7565732e54696d65737461" .
            "6d7056616c756512150a0c746f5f646174655f6e756c6c18eb0720012808" .
            "12400a1c62617369635f63686172616374657269737469635f6e756d6265" .
            "727318042001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c7565122a0a2162617369635f6368617261637465726973746963" .
            "5f6e756d626572735f6e756c6c18ec072001280812330a0f685f74726565" .
            "5f6e6f64655f69647318052001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c7565121d0a14685f747265655f6e6f64655f69" .
            "64735f6e756c6c18ed072001280812330a0e73756d6d6172697a655f6461" .
            "797318062001280b321b2e6473746f72652e76616c7565732e426f6f6c65" .
            "616e56616c7565121c0a1373756d6d6172697a655f646179735f6e756c6c" .
            "18ee0720012808122e0a096765745f746f705f7818072001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c756512170a0e67" .
            "65745f746f705f785f6e756c6c18ef072001280822ea050a08526573706f" .
            "6e736512380a106d6574615f696e666f726d6174696f6e18022003280b32" .
            "1e2e6473746f72652e656e67696e652e4d657461496e666f726d6174696f" .
            "6e12270a076d65737361676518032003280b32162e6473746f72652e656e" .
            "67696e652e4d65737361676512440a03726f7718042003280b32372e6473" .
            "746f72652e656e67696e652e73745f476574506572736f6e504453746174" .
            "6973746963735f41642e526573706f6e73652e526f771ab4040a03526f77" .
            "120f0a06726f775f696418904e2001280512410a1c76616c7565315f7265" .
            "73747269637465645f62795f7061747465726e18914e2001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512410a1c7661" .
            "6c7565325f726573747269637465645f62795f7061747465726e18924e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512310a0b746f74616c5f76616c756518934e2001280b321b2e6473746f" .
            "72652e76616c7565732e446563696d616c56616c7565122f0a0970657273" .
            "6f6e5f696418944e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512340a0e685f747265655f6e6f64655f696418" .
            "954e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c7565122b0a0676616c75653118964e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565122b0a0676616c756532" .
            "18974e2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c756512320a0c6469726563745f76616c756518984e2001280b321b" .
            "2e6473746f72652e76616c7565732e446563696d616c56616c7565122b0a" .
            "0364617918994e2001280b321d2e6473746f72652e76616c7565732e5469" .
            "6d657374616d7056616c756512410a1b62617369635f6368617261637465" .
            "7269737469635f6e756d626572189a4e2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565425c0a1b696f2e6473746f" .
            "72652e656e67696e652e70726f636564757265735a3d676f73646b2e6473" .
            "746f72652e64652f656e67696e652f70726f636564757265732f73745f47" .
            "6574506572736f6e5044537461746973746963735f4164620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

