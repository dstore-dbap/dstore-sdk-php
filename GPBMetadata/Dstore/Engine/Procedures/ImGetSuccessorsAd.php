<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetSuccessors_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class ImGetSuccessorsAd
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
            "0a82130a326473746f72652f656e67696e652f70726f636564757265732f" .
            "696d5f476574537563636573736f72735f41642e70726f746f1221647374" .
            "6f72652e656e67696e652e696d5f476574537563636573736f72735f4164" .
            "1a136473746f72652f76616c7565732e70726f746f1a1a6473746f72652f" .
            "656e67696e652f656e67696e652e70726f746f229c0c0a0a506172616d65" .
            "7465727312320a0e747265655f6e6f64655f6c69737418012001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565121c0a13" .
            "747265655f6e6f64655f6c6973745f6e756c6c18e90720012808122d0a08" .
            "6c6576656c5f6e6f18022001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c756512160a0d6c6576656c5f6e6f5f6e756c6c" .
            "18ea0720012808123e0a19696e636c7564655f6465616374697661746564" .
            "5f6e6f64657318032001280b321b2e6473746f72652e76616c7565732e42" .
            "6f6f6c65616e56616c756512270a1e696e636c7564655f64656163746976" .
            "617465645f6e6f6465735f6e756c6c18eb072001280812370a126f757470" .
            "75745f696e746f5f6f6e655f696418042001280b321b2e6473746f72652e" .
            "76616c7565732e426f6f6c65616e56616c756512200a176f75747075745f" .
            "696e746f5f6f6e655f69645f6e756c6c18ec072001280812400a1b66696c" .
            "7465725f62795f63686172616374657269737469635f696418052001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "290a2066696c7465725f62795f63686172616374657269737469635f6964" .
            "5f6e756c6c18ed0720012808123a0a1666696c7465725f62795f63686172" .
            "61635f76616c756518062001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512240a1b66696c7465725f62795f63686172" .
            "61635f76616c75655f6e756c6c18ee072001280812430a1e62696e617279" .
            "5f63686172616374657269737469635f76616c75655f696418072001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "2c0a2362696e6172795f63686172616374657269737469635f76616c7565" .
            "5f69645f6e756c6c18ef0720012808123c0a176e65676174655f66696c74" .
            "65725f62795f706172616d7318082001280b321b2e6473746f72652e7661" .
            "6c7565732e426f6f6c65616e56616c756512250a1c6e65676174655f6669" .
            "6c7465725f62795f706172616d735f6e756c6c18f0072001280812420a1e" .
            "736f72745f62795f63686172616374657269737469635f69645f6c697374" .
            "18092001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c7565122c0a23736f72745f62795f6368617261637465726973746963" .
            "5f69645f6c6973745f6e756c6c18f1072001280812340a10736f72745f6f" .
            "7074696f6e5f6c697374180a2001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c7565121e0a15736f72745f6f7074696f6e5f" .
            "6c6973745f6e756c6c18f20720012808123d0a19696e68657269745f6465" .
            "7074685f6f7074696f6e5f6c697374180b2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512270a1e696e6865726974" .
            "5f64657074685f6f7074696f6e5f6c6973745f6e756c6c18f30720012808" .
            "12440a207265637572736976655f6576616c756174696f6e5f6f7074696f" .
            "6e5f6c697374180c2001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c7565122e0a257265637572736976655f6576616c7561" .
            "74696f6e5f6f7074696f6e5f6c6973745f6e756c6c18f407200128081243" .
            "0a1e6765745f76616c7565735f666f725f736f72745f62795f6368617261" .
            "6373180d2001280b321b2e6473746f72652e76616c7565732e426f6f6c65" .
            "616e56616c7565122c0a236765745f76616c7565735f666f725f736f7274" .
            "5f62795f636861726163735f6e756c6c18f5072001280812340a0f66726f" .
            "6d5f726f775f6e756d626572180e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565121d0a1466726f6d5f726f775f" .
            "6e756d6265725f6e756c6c18f6072001280812380a136d61785f6e756d62" .
            "65725f6f665f6e6f646573180f2001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512210a186d61785f6e756d626572" .
            "5f6f665f6e6f6465735f6e756c6c18f70720012808122a0a05636f756e74" .
            "18102001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c756512130a0a636f756e745f6e756c6c18f8072001280822fa040a" .
            "08526573706f6e736512380a106d6574615f696e666f726d6174696f6e18" .
            "022003280b321e2e6473746f72652e656e67696e652e4d657461496e666f" .
            "726d6174696f6e12270a076d65737361676518032003280b32162e647374" .
            "6f72652e656e67696e652e4d657373616765123c0a03726f771804200328" .
            "0b322f2e6473746f72652e656e67696e652e696d5f476574537563636573" .
            "736f72735f41642e526573706f6e73652e526f77122a0a05636f756e7418" .
            "652001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c75651aa0030a03526f77120f0a06726f775f696418904e2001280512" .
            "310a0b7072656465636573736f7218914e2001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512350a106e6f64655f64" .
            "65736372697074696f6e18924e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565122b0a0676616c75653218934e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "122b0a0676616c75653318944e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565122b0a0676616c75653118954e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "12340a0e62696e6172795f636f64655f696418964e2001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c756512320a0c7472" .
            "65655f6e6f64655f696418974e2001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c7565122d0a076e6f64655f696418984e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756542540a1b696f2e6473746f72652e656e67696e652e70726f636564" .
            "757265735a35676f73646b2e6473746f72652e64652f656e67696e652f70" .
            "726f636564757265732f696d5f476574537563636573736f72735f416462" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

